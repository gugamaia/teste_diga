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

    $arr = [1, 2, 3, 4];

    return view('welcome',[ 
                    'arr' => $arr
    ]);
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/tag', function () {
    return view('tag');
});

Route::get('/list', function () {
    return view('list');
});


