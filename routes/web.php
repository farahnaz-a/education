<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorSettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LiveSessionController;
use App\Http\Controllers\SocialurlController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ThemeSettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Stripe Payment
Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe/post', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

Route::group(['middleware' => 'visitor_log'], function(){

    Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
    Route::get('course/list', [FrontendController::class, 'courseList'])->name('frontend.courseList');
    Route::get('course/details/{slug}', [FrontendController::class, 'courseDetails'])->name('frontend.courseDetails');
    Route::get('course/{category_name}', [FrontendController::class, 'courseByCategory'])->name('frontend.courseByCategory');
    Route::post('course-filterning', [FrontendController::class, 'courseFiltering'])->name('frontend.courseFiltering');
    Route::get('live-sessions', [FrontendController::class, 'liveSessions'])->name('frontend.liveSessions');
    Route::get('live-sessions/{id}', [FrontendController::class, 'liveSessionsDetails'])->name('frontend.livesessionDetails');
    Route::post('livesessions-filterning', [FrontendController::class, 'livesessionsFiltering'])->name('frontend.livesessionsFiltering');

    Route::get('contact-with-us', [FrontendController::class, 'contacts'])->name('frontend.contacts');
    Route::get('search', [FrontendController::class, 'search'])->name('search');

});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('admin.index');
// })->name('dashboard');

// Admin Group Route
Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){

     // AdminController
     Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
     Route::get('users/list', [AdminController::class, 'userList'])->name('users.index');
     Route::get('users/create', [AdminController::class, 'userCreate'])->name('users.create');
     Route::post('users/register', [AdminController::class, 'userRegister'])->name('users.register');
     Route::post('users/{id}/update', [AdminController::class, 'userUpdate'])->name('users.update');
     Route::get('users/{id}/destroy', [AdminController::class, 'userDestroy'])->name('users.destroy');


     // BannerController
     Route::resource('banners', BannerController::class);

     // CategoryController
     Route::resource('categories', CategoryController::class);

    // CourseController
    Route::resource('courses', CourseController::class);

    // LessonController
    Route::post('serialize/{id}', [LessonController::class, 'lessonsSerialize'])->name('lessons.serialze');
    Route::resource('lessons', LessonController::class);
     
    //  GeneralSettingController
    Route::resource('liveSessions', LiveSessionController::class);

    //  GeneralSettingController
    Route::resource('generalSettings', GeneralSettingController::class);

    //  ColorSettingController
    Route::resource('colorSettings', ColorSettingController::class);

    //  SocialurlController
    Route::resource('socialurls', SocialurlController::class);

    // ThemeSettingController 
    Route::get('theme-color', [ThemeSettingController::class, 'color'])->name('theme.color');
    Route::get('theme-toggle', [ThemeSettingController::class, 'toggle'])->name('theme.toggle');

});

    //  ContactController
    Route::resource('contacts', ContactController::class);

    //  SubscriberController
    Route::resource('subscribers', SubscriberController::class);
