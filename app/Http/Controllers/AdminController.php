<?php

namespace App\Http\Controllers;

use App\Http\Resources\OnlineConsultationResource;
use App\Models\BlogCategory;
use App\Models\Consultation;
use App\Traits\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
class AdminController extends Controller
{
    use StatusCode;

    public function getOnlineConsultation(Request $request)
    {
        $onlineConsultations = Consultation::query();
        if (!empty($request->search["name"])) {
            $onlineConsultations = $onlineConsultations->where("name", "LIKE", "%" . $request->search["name"] . "%");
        }
        if (!empty($request->search["date"])) {
            $onlineConsultations = $onlineConsultations->where("date_time", $request->search["date"]);
        }

        $onlineConsultations = $onlineConsultations->orderBy("created_at", "asc")->paginate(20);

        return $this->success(200, [
            "consultations" => OnlineConsultationResource::collection($onlineConsultations),
            'meta' => [
                'current_page' => $onlineConsultations->currentPage(),
                'last_page' => $onlineConsultations->lastPage(),
                'per_page' => $onlineConsultations->perPage(),
                'total' => $onlineConsultations->total(),
            ]
        ]);
    }


    public function deleteOnlineConsultation($id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->delete();
        return $this->success(204, "{}");
    }

    public function seenOnlineConsultation($id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->is_read = !$consultation->is_read;
        $consultation->save();

        return $this->success(200, new OnlineConsultationResource($consultation));
    }

    public function changeNotes(Request $request, $id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->notes = $request->notes;
        $consultation->save();

        return $this->success(200, new OnlineConsultationResource($consultation));
    }

    public function blogCategories()
    {
        return view("admin.blog_category");
    }


    public function getBlogCategories()
    {
        $onlineConsultations = BlogCategory::orderBy("created_at", "asc")->select("id","name", "name_en", "slug")->paginate(20);

        return $this->success(200, [
            "categories" => $onlineConsultations,
            'meta' => [
                'current_page' => $onlineConsultations->currentPage(),
                'last_page' => $onlineConsultations->lastPage(),
                'per_page' => $onlineConsultations->perPage(),
                'total' => $onlineConsultations->total(),
            ]
        ]);
    }

    public function createBlogCategories(Request $request)
    {

        $category = BlogCategory::where("name", $request->titleNew)->orWhere("name_en", $request->titleNewEn)->first();

        if($category){
            return $this->error(409, "This category isset");
        }
        BlogCategory::create([
            "name" => $request->titleNew,
            "name_en" => $request->titleNewEn,
            "slug" => Str::slug($request->titleNew)
        ]);

        return $this->success(201, "success");

    }

    public function deleteCategory($id)
    {
        //provera da li je povezano sa nekim blogom

        $category = BlogCategory::findOrFail($id);
        $blog = Blog::where("blog_category_id" , $id)->first();
        if($blog){
             abort(403);
        }

        $category->delete();

        return $this->success(200, "Category has been successfully deleted");

    }


}
