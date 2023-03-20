<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\PlaylistController;

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

Route::get('/album', [PagesController::class, 'album'])->middleware(['auth', 'auth:web']);


// Route::get('/playlist', function () {
//     return view('playlist');
// })->middleware(['auth', 'auth:web']);
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
Route::get('Artists', function () {
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
Route::post('/Newsong', [AdminController::class, 'Newsong']);
//show song list
Route::get('/Dashboard', [AdminController::class, 'songlist']);
// show Edit song Form
Route::get('/EditSong/{id}/edit', [AdminController::class, 'EditSong']);

//Edit Submit song
Route::put('/UpdateSong/{id}', [AdminController::class, 'UpdateSong']);

//Delete song
Route::delete('/DeleteSong/{id}', [AdminController::class, 'DeleteSong']);
//Add New Playlist
Route::get('/AddPlaylist', function () {
    return view('/GestionUser/AddPlaylist');
});

//Add new playlist to database
Route::post('/Newplaylist', [PlaylistController::class, 'NewPlaylist']);
//show playlist list
Route::get('/playlist', [PlaylistController::class, 'showplaylist'])->middleware(['auth', 'auth:web']);
//show Edit playlist Form
Route::get('/EditPlaylist/{id}', [PlaylistController::class, 'EditPlaylist']);
//delete playlist
Route::get('/DeletePlaylist/{id}', [PlaylistController::class, 'DeletePlaylist']);
//Update playlist
Route::put('/UpdatePlaylist/{id}', [PlaylistController::class, 'UpdatePlaylist']);
//Add new Band
Route::get('/AddBand', function () {
    return view('Admin/BandGestion/AddBand');
});
//Add new Band to database
Route::post('/NewBand', [BandController::class, 'NewBand']);





