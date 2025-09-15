<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::post('/get/online-consultation', [\App\Http\Controllers\AdminController::class, "getOnlineConsultation"]);
Route::delete("/delete/consultation/{id}" , [\App\Http\Controllers\AdminController::class, "deleteOnlineConsultation"]);
Route::patch("/seen/consultation/{id}" , [\App\Http\Controllers\AdminController::class, "seenOnlineConsultation"]);
Route::patch("/change/consultation/notes/{id}" , [\App\Http\Controllers\AdminController::class, "changeNotes"]);

Route::get("/blog-kategorije" , [\App\Http\Controllers\AdminController::class, "blogCategories"]);
Route::get("/get/blog-category" , [\App\Http\Controllers\AdminController::class, "getBlogCategories"]);
Route::post("/create/blog-category" , [\App\Http\Controllers\AdminController::class, "createBlogCategories"]);
Route::delete("/delete/category/{id}" , [\App\Http\Controllers\AdminController::class, "deleteCategory"]);


Route::group(['prefix' => "/blog" , 'middleware' => ['auth']] , function(){
    Route::get('/kreiraj-objavu', [BlogController::class, "createNewPostPage"] );
    Route::post('/kreiraj-novu-objavu', [BlogController::class, "createNewPost"] );

    Route::get('/sve-objave', [BlogController::class, "allAdminBlogs"] );
    Route::get('/getAdminBlogs', [BlogController::class, "getAdminBlogs"] );

    Route::patch('/changeActiveStatus/{id}', [BlogController::class, "changeActiveStatus"] );
    Route::delete('/deleteBlog/{id}', [BlogController::class, "deleteBlog"] );
});



