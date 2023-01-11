<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;




Route::view('/','welcome')->name('home');

// appname.test/contacto => contact
Route::view('/contacto','contact')->name('contact');

//appname1.test/blog => blog
Route::get('/blog', [PostController::class, 'index'])->name('blog');

//appname1.test/about => about
Route::view('/about','about')->name('about');




