<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//peticiones get 
//Route::get('/', function () {
   // return view('welcome');
// });
 ///appname1.test => welcome
Route::view('/','welcome')->name('home');

// appname.test/contacto => contact
Route::view('/contacto','contact')->name('contact');

//appname1.test/blog => blog
Route::view('/blog','blog')->name('blog');

//appname1.test/about => about
Route::view('/about','about')->name('about');




