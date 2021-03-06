<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

use App\Http\Controllers\LoginController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GameReviewController;

Route::resource('games', GameController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('games.reviews', GameReviewController::class);
Route::get('games/reviews', [ReviewController::class, 'gameReviews']);
Route::prefix('/users')->group( function() {
	Route::post('/login', [LoginController::class, 'login']);
});

