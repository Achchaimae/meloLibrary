<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\ArtistController;
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
//home page
// Route::get('/', function () { return view('index'); });
Route::get('/', [SongsController::class, 'songlist'],);
// show single music
Route::get('/singleMusic/{id}', [SongsController::class, 'SingleMusic']);

// })->middleware(['auth', 'auth:web']);
Route::get('/artist', [ArtistController::class, 'listArtists'])->middleware(['auth', 'auth:web']);
Route::get('/album', [PagesController::class, 'album'])->middleware(['auth', 'auth:web']);
//dashboard page
// Route::get('/Dashboard', function () {
//     return view('Admin/Songs');
// });
Route::get('Comments', function () {
    return view('Admin/Comments');
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
Route::get('/Dashboard', [AdminController::class, 'songlist'])->middleware('CheckRole:admin');
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
//show bands list
Route::get('/Bands', [BandController::class, 'showbands'])->middleware(['auth', 'auth:web']);
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
//delete band
Route::get('/DeleteBand/{id}', [BandController::class, 'DeleteBand']);
// edit band
Route::get('/EditBand/{id}', [BandController::class, 'EditBand']);
//update band
Route::put('/UpdateBand/{id}', [BandController::class, 'UpdateBand']);
//add  new artist
Route::get('/AddArtist', function () {
    return view('Admin/ArtistGestion/AddArtist');
});
//add new artist to database
Route::post('/NewArtist', [ArtistController::class, 'NewArtist']);
//show artist list
Route::get('/Artists', [ArtistController::class, 'showArtists']);
//delete artist
Route::get('/DeleteArtist/{id}', [ArtistController::class, 'DeleteArtist']);
//edit artist
Route::get('/EditArtist/{id}', [ArtistController::class, 'EditArtist']);
//update artist
Route::post('/UpdateArtist/{id}', [ArtistController::class, 'UpdateArtist']);
//add to playlist
Route::post('/AddToPlaylist', [PlaylistController::class, 'addToPlaylist']);
// show song in playlist
Route::get('/myPlaylist/{id}',[PlaylistController::class, 'myPlaylist']);
