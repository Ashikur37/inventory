<?php

use App\Http\Controllers\Accountant\ExpenseController;
use App\Http\Controllers\Accountant\MobileAgentController;
use App\Http\Controllers\Admin\AccountantController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\ObserverController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('index.html', 'welcome');
Route::view('about_us.html', 'about_us');
Route::view('services.html', 'services');
Route::view('blog.html', 'blog');
Route::view('contact_us.html', 'contact');
Route::view('gallery.html', 'gallery');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('role');

// super-admin route section

/**
 * Route section of admin
 *
 * @return
 */
Route::get('admin/home', [AdminHomeController::class, 'index'])->name('admin.home')->middleware('role');

Route::resource('observers', ObserverController::class)->middleware('auth');
