<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SertifikatController;

/*
|==========================================================================
| Penulisan Routing (link website)
|==========================================================================
| User                              Name
|--------------------------------------------------------------------------
| /                                 "home"
| /blog                             "blog-page"
| /sertifikat                       "sertifikat-page"
| /kontak                           "kontak-saya"
|
|--------------------------------------------------------------------------
| Admin                             Name
|--------------------------------------------------------------------------
| /admin/adminpage                  "admin-page"
| /admin/login                      "login"
| /admin/blog                       "admin-blog"
| /admin/blog/create                "admin-blog-create"
| /admin/blog/edit/{id}             "admin-blog-edit"
| /admin/blog/delete/{id}           "admin-blog-delete"
| /admin/sertifikat                 "admin-sertifikat"
| /admin/sertifikat/create          "admin-sertifikat-create"
| /admin/sertifikat/edit/{id}       "admin-sertifikat-edit"
| /admin/sertifikat/delete/{id}     "admin-sertifikat-delete"
|
*/

// Route Home Page
Route::get('/', [HomeController::class, 'index'])->name('home-page');

// Authentication
Route::middleware(['guest'])->group(function () {
    Route::get('admin/login', [LoginController::class, 'login'])->name('login-page');
    Route::post('admin/login', [LoginController::class, 'authenticate'])->name('authenticate');
});Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route Admin
Route::middleware(['auth'])->group(function () {
    // admin page
    Route::get('admin/admin-page', [AdminController::class, 'index'])->name('admin-page');

    // blog
    Route::get('admin/blog', [BlogController::class, 'index'])->name('admin-blog');
    Route::get('admin/blog/create', [BlogController::class, 'create'])->name('admin-blog-create');
    Route::post('admin/blog/store', [BlogController::class, 'store'])->name('admin-blog-store');
    Route::get('admin/blog/edit/{blog}', [BlogController::class, 'edit'])->name('admin-blog-edit');
    Route::post('admin/blog/update/{blog}', [BlogController::class, 'update'])->name('admin-blog-update');
    Route::delete('admin/blog/delete/{blog}', [BlogController::class, 'destroy'])->name('admin-blog-delete');

    // Sertifikat
    Route::get('admin/sertifikat', [SertifikatController::class, 'index'])->name('admin-sertifikat');
    Route::get('admin/sertifikat/create', [SertifikatController::class, 'create'])->name('admin-sertifikat-create');
    Route::post('admin/sertifikat/store', [SertifikatController::class, 'store'])->name('admin-sertifikat-store');
    Route::get('admin/sertifikat/edit/{sertifikat}', [SertifikatController::class, 'edit'])->name('admin-sertifikat-edit');
    Route::post('admin/sertifikat/update/{sertifikat}', [SertifikatController::class, 'update'])->name('admin-sertifikat-update');
    Route::delete('admin/sertifikat/delete/{sertifikat}', [SertifikatController::class, 'destroy'])->name('admin-sertifikat-delete');
});

// Route Blog
Route::get('blog', [BlogController::class, 'blog'])->name('blog-page');

// Route Sertifikat
Route::get('sertifikat', [SertifikatController::class, 'sertifikat'])->name('sertifikat-page');

