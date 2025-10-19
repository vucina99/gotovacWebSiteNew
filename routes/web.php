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
Route::get('/galerija', [IndexController::class, 'gallery']);


Route::get('/evropski-izvestaj', [IndexController::class, 'europeanAccidentReports']);
Route::get('/kasko-stete', [IndexController::class, 'casco']);
Route::get('/nezgode-sa-pesacima', [IndexController::class, 'walk']);
Route::get('/stete-javni-prevoz', [IndexController::class, 'publicTransport']);
Route::get('/smrtni-slucajevi', [IndexController::class, 'deathCases']);
Route::get('/stete-na-vozilima', [IndexController::class, 'vehicleDamage']);
Route::get('/stete-na-kamionima', [IndexController::class, 'truckDamage']);
Route::get('/telesne-povrede', [IndexController::class, 'physicalInjuries']);
Route::get('/kasnjenje-leta-na-aerodromu', [IndexController::class, 'flightDelays']);
Route::get('/advokat-za-saobracajke', [IndexController::class, 'carAccident']);
Route::get('/mesecna-renta', [IndexController::class, 'monthlyAnnuity']);
Route::get('/povrede-na-radu', [IndexController::class, 'workPlaceInjures']);
Route::get('/vrste-saobracajnih-steta', [IndexController::class, 'damagesTypes']);
Route::get('/stete-na-motociklima', [IndexController::class, 'motociklesDamage']);



//post
Route::post('/contact', [IndexController::class, 'contactGotovac']);
Route::post('/reservation/consultation', [IndexController::class, 'consultationReservation']);




Route::group(['prefix' => "/blog"] , function(){
    Route::get('/{category?}', [BlogController::class, "index"] );
    Route::get('/objava/{slug}', [BlogController::class, "post"] );
    Route::post('/kreiraj-komentar', [BlogController::class, "createComment"] );
    Route::get('/get/comments/{blog}', [BlogController::class, "getBlogComment"] );
    Route::get('/get/category-blogs/{categoryId}/{blogId}', [BlogController::class, "getCategoryBlogs"] );

    Route::get('/recent/posts', [BlogController::class, "getLastThreePosts"] );
});
