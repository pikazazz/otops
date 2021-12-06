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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Product', 'ProductController');
Route::resource('News', 'NewsController');
Route::resource('Vr', 'VrController');
Route::resource('home', 'HomeController');
Route::resource('profile', 'userProfile');


// Route::get('/logout', function () {
//     Auth::logout();
//     return redirect('/home');
// });
Auth::routes();

