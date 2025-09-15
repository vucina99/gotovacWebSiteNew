<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewBlogPostRequest;
use App\Http\Resources\AdminBlogListResource;
use App\Http\Resources\BlogCategoryResource;
use App\Http\Resources\BlogListResource;
use App\Http\Resources\BlogPostResource;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogImage;
use App\Services\BlogList;
use App\Traits\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    use StatusCode;


    private $blogList;

    public function __construct(BlogList $blogList)
    {
        $this->blogList = $blogList;
    }
//    private $blogList;
//
//    public function __construct(BlogList $blogList)
//    {
//        $this->blogList = $blogList;
//    }

    public function index($selectedCategory = null)
    {

        $blogCategoryAll =  BlogCategory::all();
        $blogCategory = BlogCategoryResource::collection($blogCategoryAll);

        $blogs = $this->blogList->getData($selectedCategory , request());


        $allBlogs = [
            "blogs" => BlogListResource::collection($blogs),
            'meta' => [
                'current_page' => $blogs->currentPage(),
                'last_page' => $blogs->lastPage(),
                'per_page' => $blogs->perPage(),
                'total' => $blogs->total(),
            ]];



        return view("blog.blog", compact("blogCategory", "selectedCategory", "allBlogs"));

    }

    public function createNewPostPage()
    {
        $getCategories = BlogCategory::select("id", "name")->get();

        return view("admin.create_blog" , compact("getCategories"));
    }

    public function createNewPost(CreateNewBlogPostRequest $request)
    {
        $blogImage = $request->image;

        $blogImageName =  Str::slug($blogImage->getClientOriginalName() . time() . "-blog-" . $request->blog["title"]) . "." . Blog::getExtensionFromMimeType($blogImage->getMimeType());


        DB::beginTransaction();
        try {
            $path = public_path('allBlogImages');
            if (!file_exists($path)) {
                mkdir($path, 0777, true); // pravi folder rekurzivno
            }

            file_put_contents($path . '/' . $blogImageName, file_get_contents($blogImage));

            $blogImageUpload = BlogImage::create([
                "path" => $blogImageName,
                "alt" => $request->blog["alt"],
                "title" => $request->blog["imgTitle"]
            ]);

            Blog::create([
                "title_sr" => $request->blog["title"],
                "content_sr" => $request->blog["content"],
                "part_content_sr" => $request->blog["partContent"] . "...",
                "slug_sr" => Str::slug($request->blog["title"]),
                "title_en" => $request->blog["title_en"],
                "content_en" => $request->blog["content_en"],
                "part_content_en" => $request->blog["partContent_en"] . "...",
                "slug_en" => Str::slug($request->blog["title_en"]),
                "meta_description" => $request->blog["metaDescription"],
                "meta_keywords" => $request->blog["metaKeywords"],
                "meta_title" => $request->blog["metaTitle"],
                "blog_category_id" => $request->blog["category"],
                "blog_image_id" => $blogImageUpload->id,
            ]);

            DB::commit();
        } catch (\Exception $e) {
            $filePath = public_path('allBlogImages/' . $blogImageName);
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            DB::rollBack();
            return $this->error(500, $e);
        }

        abort(201);
    }

    public function post($slug)
    {

        $findPost =  Blog::where("slug_sr", $slug)->orWhere("slug_en" , $slug)->activeBlog()->firstOrFail();
        $blogCategoryAll =  BlogCategory::all();
        $blogCategory = BlogCategoryResource::collection($blogCategoryAll);

        return view("blog.blog_post", ["post" => new BlogPostResource($findPost), "blogCategories" => $blogCategory]);
    }


//    public function getCategoryBlogs($categoryId , $blogId)
//    {
//        $blogsFromCategory = Blog::where("blog_category_id" , $categoryId)->where("id" , "!=" , $blogId)->activeBlog()->orderBy("created_at", "desc")->get()->take(2);
//
//        return $this->success(200, BlogListResource::collection($blogsFromCategory));
//    }
//
    public function allAdminBlogs()
    {
        return view("admin.admin_blog_list");
    }


    public function getAdminBlogs()
    {
        $title = request()->get("title");
        $blogs = Blog::select("id","title_sr" , "is_active", "slug_sr",  "blog_category_id");
        if(!empty($title)){
            $blogs = $blogs->where("title_sr" , "LIKE" , "%$title%");
        }
        $blogs = $blogs->orderBy("is_active")->paginate(20);
        $data = [
            "blogs" => AdminBlogListResource::collection($blogs),
            'meta' => [
                'current_page' => $blogs->currentPage(),
                'last_page' => $blogs->lastPage(),
                'per_page' => $blogs->perPage(),
                'total' => $blogs->total(),
            ]];

        return $this->success(200, $data);

    }

    public function changeActiveStatus($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->is_active = !$blog->is_active;

        $blog->save();

        return $this->success(200, ["blog" => new AdminBlogListResource($blog)]);
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        if(isset($blog->blogImage) && isset($blog->blogImage->path)){
            Storage::delete($blog->blogImage->path);

        }
        $blog->delete();

        return $this->success(204, []);
    }
}
