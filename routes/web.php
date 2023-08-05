<?php

use Illuminate\Support\Facades\Route;

/*
*/

// Route Home Page
Route::get('/', function(){
    return view('homepage');
});
