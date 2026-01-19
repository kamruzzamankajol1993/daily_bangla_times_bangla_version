<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\FrontController;


Route::get('/clear', function() {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return redirect()->back();
});

// Video News Detail Route
Route::get('/video-gallery/{slug}', [App\Http\Controllers\Front\FrontController::class, 'videoDetail'])->name('front.video.details');
//frontend part start 
Route::post('/contact-us-post', [App\Http\Controllers\Front\FrontController::class, 'contactUsPost'])->name('front.contactUsPost');
Route::controller(FrontController::class)->group(function () {


    Route::get('/', 'index')->name('front.index');
    Route::get('/about_us', 'aboutUs')->name('front.aboutUs');
    Route::get('/contact-us', 'contactUs')->name('front.contactUs');
    Route::post('/contact-us-post', 'contactUsPost')->name('front.contactUsPost');
    Route::get('/services', 'services')->name('front.services');


    Route::get('/news-category/{slug}', 'newsList')->name('front.category.news');
  
    Route::get('/news/{slug}', 'newsDetails')->name('front.news.details');

});
   
Route::post('/comment-store', [FrontController::class, 'storeComment'])->name('front.comment.store');
Route::post('/reaction-store', [FrontController::class, 'storeReaction'])->name('front.reaction.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/payment/success', [FrontController::class, 'paymentSuccess'])->name('payment.success');
Route::post('/payment/fail', [FrontController::class, 'paymentFail'])->name('payment.fail');
Route::post('/payment/cancel', [FrontController::class, 'paymentCancel'])->name('payment.cancel');






    



Route::group(['middleware' => ['auth']], function() {


});

