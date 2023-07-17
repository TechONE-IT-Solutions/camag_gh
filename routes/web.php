<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\website\HomeController::class, 'index'])->name('home');

Route::get('about', [App\Http\Controllers\website\HomeController::class, 'about'])->name('about');

Route::get('team', [App\Http\Controllers\website\HomeController::class, 'team'])->name('team');

Route::get('events', [App\Http\Controllers\website\HomeController::class, 'events'])->name('events');

Route::get('contact', [App\Http\Controllers\website\HomeController::class, 'contact'])->name('contact');

Route::get('gallery', [App\Http\Controllers\website\HomeController::class, 'gallery'])->name('gallery');

Route::get('paydues', [App\Http\Controllers\website\HomeController::class, 'paydues'])->name('pay-dues');

Route::get('register', [App\Http\Controllers\website\HomeController::class, 'register'])->name('register');

Route::get('donate', [App\Http\Controllers\website\HomeController::class, 'donate'])->name('donate');




//Admin Routes

Route::get('/', [App\Http\Controllers\Admin\webadminController::class, 'index'])->name('dashboard');

Route::get('unitcommitte', [App\Http\Controllers\Admin\webadmindminController::class, 'unitcommittee'])->name('UnitCommittee');

Route::get('associatemember', [App\Http\Controllers\Admin\webadmindminController::class, 'associatemember'])->name('associatemember');

Route::get('assemblymember', [App\Http\Controllers\Admin\webadmindminController::class, 'assemblymember'])->name('assemblymember');

Route::get('homepage', [App\Http\Controllers\Admin\webAdminController::class, 'homepage'])->name('homepage');

Route::get('about', [App\Http\Controllers\Admin\webAdminController::class, 'about'])->name('about');

Route::get('contact', [App\Http\Controllers\Admin\webAdminController::class, 'contact'])->name('contact');

Route::get('register', [App\Http\Controllers\Admin\webAdminController::class, 'register'])->name('register');

Route::get('login', [App\Http\Controllers\Admin\webAdminController::class, 'login'])->name('login');

Route::get('paydues', [App\Http\Controllers\Admin\webAdminController::class, 'paydues'])->name('paydues');

Route::get('donate', [App\Http\Controllers\Admin\webAdminController::class, 'donate'])->name('donate');

Route::get('executive', [App\Http\Controllers\Admin\webAdminController::class, 'executive'])->name('executives');

Route::get('register', [App\Http\Controllers\Admin\webAdminController::class, 'register'])->name('register');

Route::get('payment', [App\Http\Controllers\Admin\webAdminController::class, 'payment'])->name('payment');

Route::get('gallery', [App\Http\Controllers\Admin\webAdminController::class, 'gallery'])->name('gallery');

Route::get('charts', [App\Http\Controllers\Admin\webAdminController::class, 'charts'])->name('charts');

Route::get('events', [App\Http\Controllers\Admin\webAdminController::class, 'events'])->name('events');