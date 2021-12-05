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
