<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
})->middleware(['auth', 'auth:web']);
Route::get('/album', function () {
    return view('album');
})->middleware(['auth', 'auth:web']);
Route::get('/playlist', function () {
    return view('playlist');
})->middleware(['auth', 'auth:web']);
// Route::get('/login', function () {
//     return view('login');
// })
// Route::get('/register', function () {
//     return view('singup');
// });
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

//show register/create form
Route::get('/register', [UserController::class, 'create']);
//create new user
Route::post('/users', [UserController::class, 'store']);
//show login form
Route::get('/login', [UserController::class, 'login'])->name('login');
//login user
Route::post('authenticate' , [UserController::class, 'authenticate']);
//log user out 
Route::get('/logout', [UserController::class, 'logout']);
//Add new song
Route::get('/AddSong', function () {
    return view('Admin/Gestion/AddSong');
});
//add new song to database
Route::post('/NewSong', [AdminController::class, 'Newsong']);
//show song list
Route::get('/Dashboard', [AdminController::class, 'songlist']);
//Edit song
Route::get('/EditSong/{id}', [AdminController::class, 'EditSong']);
//Delete song
Route::delete('/DeleteSong/{id}', [AdminController::class, 'DeleteSong']);

