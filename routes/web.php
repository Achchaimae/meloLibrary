<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/artist', function () {
    return view('artist');
});
Route::get('/album', function () {
    return view('album');
});
Route::get('/playlist', function () {
    return view('playlist');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/singup', function () {
    return view('singup');
});
Route::get('/Dashboard', function () {
    return view('Admin/Songs');
});
Route::get('Comments', function () {
    return view('Admin/Comments');
});
Route::get('Bands', function () {
    return view('Admin/Bands');
});
Route::get('Playlists', function () {
    return view('Admin/playlist');
});



