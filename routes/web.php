<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('homepage');
});

