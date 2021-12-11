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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function(){
    return view('components.front.dashboard');
});

Route::get('/about', function () {
    return view('components.front.about', [
        'name' => 'Made Suande',
    ]);
});


Route::get('/posts', function () {
    return view('components.front.posts');
});

Route::get('/post', function () {
    return view('components.front.post');
});

Route::get('/login', function() {
    return view('components.auth.login');
});

Route::get('/register', function() {
    return view('components.auth.register');
});


Route::get('/dashboard', function() {
    return view('layouts.main-admin');
});

Route::get('/admin/blog', function() {
 return view('');
});