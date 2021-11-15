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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/Song', [\App\Http\Controllers\SongController::class, 'index'])->name('song');

//Route::get('/playlist', [\App\Http\Controllers\SongController::class, 'playlist'])->name('playlist');

Route::get('/songAdd', [\App\Http\Controllers\SongController::class, 'SongAdd'])->name('songAdd');
Route::post('/songAdd', [\App\Http\Controllers\SongController::class, 'SongAdding'])->name('songAdd');

Route::get('/genreAdd', [\App\Http\Controllers\genreController::class, 'genreAdd'])->name('genreAdd');
Route::post('/genreAdd', [\App\Http\Controllers\genreController::class, 'genreAdding'])->name('genreAdd');

Route::get('/playlist', [App\Http\Controllers\playlistController::class, 'index'])->name('Playlist.index');

Route::get('/playlist/playlistAdd', [App\Http\Controllers\playlistController::class, 'CreatePlaylistInDatabase'])->name('playlistAdd');
Route::post('/playlist/playlistAdd', [App\Http\Controllers\playlistController::class, 'CreatingPlaylistInDatabase'])->name('playlistAdding');

Route::get('/genre/{genre}', [App\Http\Controllers\genreController::class, 'index'])->name('genre.index');
Route::get('/genre', [App\Http\Controllers\genreController::class, 'genre'])->name('genre');

Route::get('/playlist/add/{id}', [App\Http\Controllers\playlistController::class, 'add'])->name('session.add');
Route::get('/playlist/databasePlaylist', [App\Http\Controllers\playlistController::class, 'databasePlaylist'])->name('databasePlaylist');
Route::get('/playlist/{playlist}', [App\Http\Controllers\playlistController::class, 'specificPlaylist'])->name('specificPlaylist');



require __DIR__.'/auth.php';
