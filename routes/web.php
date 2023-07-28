<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\teamController;
use App\Http\Controllers\website\aboutController;
use App\Http\Controllers\Admin\webadminController;
use App\Http\Controllers\website\donateController;
use App\Http\Controllers\website\eventsController;
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
use App\Http\Controllers\Admin\adminExecutivesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// FRONT-END ROUTES
Route::get('/', [HomeController::class, 'index'])->name('website-home');

Route::get('website-about', [aboutController::class, 'about'])->name('website-about');

Route::get('website-team', [teamController::class, 'team'])->name('website-team');

Route::get('website-events', [eventsController::class, 'events'])->name('website-events');

Route::get('website-contact', [contactController::class, 'contact'])->name('website-contact');

Route::get('website-gallery', [galleryController::class, 'gallery'])->name('website-gallery');

Route::get('website-paydues', [payduesController::class, 'paydues'])->name('website-pay-dues');

Route::get('website-register', [registerController::class, 'register'])->name('website-register');

Route::get('website-donate', [donateController::class, 'donate'])->name('website-donate');

Route::get('success', [successController::class, 'success'])->name('success');




//Admin Routes

Route::get('dashboard', [webadminController::class, 'index'])->name('dashboard');

Route::get('unitcommittee', [adminUnitcommitteememberController::class, 'index'])->name('unitcommittee');

Route::get('associatemember', [adminAssociatememberController::class, 'index'])->name('associatemember');

Route::get('assemblymember', [adminAssemblymemberController::class, 'index'])->name('assemblymember');

Route::get('homepage', [adminHomepageController::class, 'index'])->name('homepage');

Route::get('about', [adminAboutController::class, 'index'])->name('about');

Route::get('contact', [adminContactController::class, 'index'])->name('contact');

Route::get('profile', [adminProfileController::class, 'index'])->name('profile');

// Route::get('login', [App\Http\Controllers\Admin\webAdminController::class, 'login'])->name('login');

Route::get('paydues', [adminPayduesController::class, 'index'])->name('paydues');

Route::get('donate', [adminDonateController::class, 'index'])->name('donate');

Route::get('executive', [adminExecutivesController::class, 'index'])->name('executive');

//Route::get('register', [App\Http\Controllers\Admin\webAdminController::class, 'register'])->name('register');

Route::get('payment', [adminPaymentController::class, 'index'])->name('payment');

Route::get('gallery', [adminGalleryController::class, 'index'])->name('gallery');

Route::get('charts', [adminChartsController::class, 'index'])->name('charts');

Route::get('events', [adminEventsController::class, 'index'])->name('events');

//post route
Route::post('post', [HomeController::class, 'store'])->name('send');
Route::get('assemblymember', [HomeController::class, 'getassembly'])->name('assemblymember');