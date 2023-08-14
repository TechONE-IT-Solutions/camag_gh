<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SoftController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\contactUsController;
use App\Http\Controllers\adminLoginController;
use App\Http\Controllers\DuessuccessController;

use App\Http\Controllers\website\blogController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\teamController;
use App\Http\Controllers\website\aboutController;
use App\Http\Controllers\Admin\webadminController;

use App\Http\Controllers\website\donateController;
use App\Http\Controllers\website\eventsController;
use App\Http\Controllers\DonationsuccessController;
use App\Http\Controllers\website\contactController;
use App\Http\Controllers\website\galleryController;
use App\Http\Controllers\website\payduesController;

use App\Http\Controllers\website\successController;
use App\Http\Controllers\Admin\adminAboutController;


use App\Http\Controllers\website\registerController;
use App\Http\Controllers\Admin\adminChartsController;
use App\Http\Controllers\Admin\adminDonateController;
use App\Http\Controllers\Admin\adminEventsController;
use App\Http\Controllers\Admin\adminContactController;
use App\Http\Controllers\Admin\adminGalleryController;

use App\Http\Controllers\Admin\adminPayduesController;
use App\Http\Controllers\Admin\adminPaymentController;
use App\Http\Controllers\Admin\adminProfileController;
use App\Http\Controllers\Admin\adminHomepageController;
use App\Http\Controllers\website\duessuccessController;


use App\Http\Controllers\Admin\adminExecutivesController;
use App\Http\Controllers\website\registrationFeeController;
use App\Http\Controllers\Admin\adminAssemblymemberController;
use App\Http\Controllers\Admin\adminAssociatememberController;
use App\Http\Controllers\Admin\adminUnitcommitteememberController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



///////////////////////////////////////////////////////////////////////////////////////////////////////////////


// FRONT-END ROUTES
Route::get('/', [HomeController::class, 'index'])->name('website-home');

Route::get('website-about', [aboutController::class, 'about'])->name('website-about');

Route::get('/website-blog/{id}', [blogController::class, 'index'])->name('website-blog');

Route::get('website-team', [teamController::class, 'team'])->name('website-team');

Route::get('website-events', [eventsController::class, 'events'])->name('website-events');

//Contact routes
Route::get('website-contact', [contactController::class, 'contact'])->name('website-contact');
Route::post('website-contactUs', [contactUsController::class, 'send'])->name('website-contactUs');
Route::get('contactUs', [contactUsController::class, 'show'])->name('contactUs');

Route::get('website-gallery', [galleryController::class, 'gallery'])->name('website-gallery');

Route::get('website-paydues', [payduesController::class, 'paydues'])->name('website-pay-dues');

Route::get('errorpage', [SoftController::class, 'index'])->name('errorpage');
Route::get('notsuccess', [PaperController::class, 'index'])->name('notsuccess');
Route::get('donationsuccess', [DonationsuccessController::class, 'index'])->name('donationsuccess');
Route::get('duessuccess', [DuessuccessController::class, 'index'])->name('duessuccess');

Route::get('website-register', [registerController::class, 'register'])->name('website-register')->middleware('payment.successful');

Route::get('website-donate', [donateController::class, 'donate'])->name('website-donate');

Route::get('website-registration', [registrationFeeController::class, 'index'])->name('website-registration');

Route::get('success', [successController::class, 'success'])->name('success');



Route::post('post', [registerController::class, 'store'])->name('send');
Route::get('/get-member/{memberID}', [MemberController::class, 'getMember']);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Admin Routes {
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/dashboard', [webadminController::class, 'index'])->name('dashboard');

    Route::get('unitcommittee', [adminUnitcommitteememberController::class, 'index'])->name('unitcommittee');
    //Admin Associate members routes
    Route::get('associatemember', [adminAssociatememberController::class, 'index'])->name('associatemember');
    Route::delete('associate_destroy/{id}', [adminAssociatememberController::class, 'destroy'])->name('associate_destroy');

    //Admin Assembly member routes
    Route::get('assemblymember', [adminAssemblymemberController::class, 'index'])->name('assemblymember');
    Route::delete('assemblymember_destroy/{id}', [adminAssemblymemberController::class, 'destroy'])->name('assemblymember_destroy');
    //HOME
    //Home GET Routes
    Route::get('homepage', [adminHomepageController::class, 'index'])->name('homepage');
    Route::get('get-counter', [adminHomepageController::class, 'counter'])->name('getNumber'); //not in use
    Route::get('get-news', [adminHomepageController::class, 'news'])->name('getNews'); //not in use
    Route::get('get-teams', [adminHomepageController::class, 'teams'])->name('getTeams'); //not in use
    //Home POST Routes
    Route::post('h_banner', [adminHomepageController::class, 'banner_store'])->name('h_banner');
    Route::post('number', [adminHomepageController::class, 'number_store'])->name('number');
    Route::post('news', [adminHomepageController::class, 'news_store'])->name('news');
    Route::post('team', [adminHomepageController::class, 'team_store'])->name('team');
    //Home DELETE Routes
    Route::delete('homepage/{id}', [adminHomepageController::class, 'destroy'])->name('homepage.destroy');
    Route::delete('homepage/clear/{id}', [adminHomepageController::class, 'clear'])->name('homepage.clear');
    Route::delete('homepage/cut/{id}', [adminHomepageController::class, 'cut'])->name('homepage.cut');
    Route::delete('homepage/eliminate/{id}', [adminHomepageController::class, 'eliminate'])->name('homepage.eliminate');



    Route::get('about', [adminAboutController::class, 'index'])->name('about');

    Route::get('contact', [adminContactController::class, 'index'])->name('contact');

    Route::get('profile', [adminProfileController::class, 'index'])->name('profile');

    Route::get('paydues', [adminPayduesController::class, 'index'])->name('paydues');

    Route::get('donate', [adminDonateController::class, 'index'])->name('donate');
    //Admin Executive routes
    Route::get('executive', [adminExecutivesController::class, 'index'])->name('executive');
    Route::post('post-executive', [adminExecutivesController::class, 'store'])->name('post-executive');
    Route::delete('executive.destroy/{id}', [adminExecutivesController::class, 'destroy'])->name('executive.destroy');


    Route::get('payment', [adminPaymentController::class, 'index'])->name('payment');
    //Route::get('paymentget1', [adminPaymentController::class, 'index'])->name('paymentget1');
    Route::post('paymentpost', [adminPaymentController::class, 'store'])->name('paymentpost');

    // Admin Gallery routes
    Route::get('gallery', [adminGalleryController::class, 'index'])->name('gallery');
    Route::post('post-gallery', [adminGalleryController::class, 'store'])->name('post-gallery');
    Route::delete('gallery/destroy/{id}', [adminGalleryController::class, 'destroy'])->name('delete-gallery');

    Route::get('charts', [adminChartsController::class, 'index'])->name('charts');

    //Admin Events routes
    Route::get('events', [adminEventsController::class, 'index'])->name('events');
    Route::post('events_post', [adminEventsController::class, 'store'])->name('events_post');
    Route::delete('events_destroy/{id}', [adminEventsController::class, 'destroy'])->name('events_destroy');
});

// payment routes
Route::post('/pay', [PaymentController::class, 'make_payment'])->name('pay');
Route::get('/pay/callback', [PaymentController::class, 'payment_callback'])->name('callback');
Route::get('/get-data/{transactionReference}', [adminPaymentController::class, 'getData'])->name('getData');
Auth::routes();

Auth::routes();
