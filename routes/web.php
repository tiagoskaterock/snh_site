<?php

use Illuminate\Support\Facades\Route;



// -----------------  SITE ---------------------

Route::get('/', function () {
    return view('site.index');
})->name('inicio');



Route::get('/blog', function () {
    return view('site.blog');
})->name('blog');



Route::get('/post', function () {
    return view('site.post');
})->name('post');
