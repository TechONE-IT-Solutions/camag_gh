<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\teamController;
use App\Http\Controllers\website\aboutController;
use App\Http\Controllers\website\donateController;
use App\Http\Controllers\website\eventsController;
use App\Http\Controllers\website\contactController;
use App\Http\Controllers\website\galleryController;
use App\Http\Controllers\website\payduesController;
use App\Http\Controllers\website\successController;
use App\Http\Controllers\website\registerController;

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

Route::get('dashboard', [App\Http\Controllers\Admin\webadminController::class, 'dashboard'])->name('dashboard');

Route::get('unitcommittee', [App\Http\Controllers\Admin\webadminController::class, 'unitcommittee'])->name('unitcommittee');

Route::get('associatemember', [App\Http\Controllers\Admin\webadminController::class, 'associatemember'])->name('associatemember');

Route::get('assemblymember', [App\Http\Controllers\Admin\webadminController::class, 'assemblymember'])->name('assemblymember');

Route::get('homepage', [App\Http\Controllers\Admin\webAdminController::class, 'homepage'])->name('homepage');

Route::get('about', [App\Http\Controllers\Admin\webAdminController::class, 'about'])->name('about');

Route::get('contact', [App\Http\Controllers\Admin\webAdminController::class, 'contact'])->name('contact');

Route::get('profile', [App\Http\Controllers\Admin\webAdminController::class, 'profile'])->name('profile');

// Route::get('login', [App\Http\Controllers\Admin\webAdminController::class, 'login'])->name('login');

Route::get('paydues', [App\Http\Controllers\Admin\webAdminController::class, 'paydues'])->name('paydues');

Route::get('donate', [App\Http\Controllers\Admin\webAdminController::class, 'donate'])->name('donate');

Route::get('executive', [App\Http\Controllers\Admin\webAdminController::class, 'executive'])->name('executive');

//Route::get('register', [App\Http\Controllers\Admin\webAdminController::class, 'register'])->name('register');

Route::get('payment', [App\Http\Controllers\Admin\webAdminController::class, 'payment'])->name('payment');

Route::get('gallery', [App\Http\Controllers\Admin\webAdminController::class, 'gallery'])->name('gallery');

Route::get('charts', [App\Http\Controllers\Admin\webAdminController::class, 'charts'])->name('charts');

Route::get('events', [App\Http\Controllers\Admin\webAdminController::class, 'events'])->name('events');


//post route
Route::post('post', [registerController::class, 'store'])->name('send');
Route::get('assemblymember', [HomeController::class, 'getassembly'])->name('assemblymember');