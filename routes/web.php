<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


//get
Auth::routes(['register' => false ,  'reset'    => false]);
Route::get('/', [IndexController::class, 'index']);
Route::get('/kontakt', [IndexController::class, 'contact']);
Route::get('/advokatska-tarifa', [IndexController::class, 'tariff']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/online-konsultacije', [IndexController::class, 'consultation'])->name('home');
Route::get('/promeni-jezik/{lang}', [IndexController::class, 'changeLanguage']);
Route::get('/kalkulator-trudnicke-naknade', [IndexController::class, 'allowanceCalculator']);





//post
Route::post('/contact', [IndexController::class, 'contactGotovac']);
Route::post('/reservation/consultation', [IndexController::class, 'consultationReservation']);




Route::group(['prefix' => "/blog"] , function(){
    Route::get('/{category?}', [BlogController::class, "index"] );
    Route::get('/objava/{slug}', [BlogController::class, "post"] );
    Route::post('/kreiraj-komentar', [BlogController::class, "createComment"] );
    Route::get('/get/comments/{blog}', [BlogController::class, "getBlogComment"] );
    Route::get('/get/category-blogs/{categoryId}/{blogId}', [BlogController::class, "getCategoryBlogs"] );


});
