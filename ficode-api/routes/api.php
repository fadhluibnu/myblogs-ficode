<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\PlaylistDataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [UserController::class, 'login']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/playlist', [PlaylistController::class, 'index']);
Route::get('/playlist/{playlist:slug}', [PlaylistController::class, 'show']);

Route::get('/playlist_data', [PlaylistDataController::class, 'index']);
Route::get('/playlist_data/{playlist_datum}', [PlaylistDataController::class, 'show']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{category:slug}', [CategoryController::class, 'show']);
 
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('/post', PostController::class)->except('show', 'index');

    Route::resource('/image', ImageController::class);

    Route::resource('/playlist', PlaylistController::class)->except('show', 'index');
    Route::resource('/playlist_data', PlaylistDataController::class)->except('show', 'index');

    Route::resource('/category', CategoryController::class)->except('show', 'index');

    Route::post('/logout', [UserController::class, 'logout']);
});
