<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('user/{id}',[UserController::class, 'show_user']);
Route::get('articles/{id}',[ArticleController::class, 'find_id']);
Route::post('create/articles',[ArticleController::class, 'create']);
Route::put('update/articles/{id}',[ArticleController::class, 'update']);
Route::delete('delete/articles/{id}',[ArticleController::class, 'delete']);
Route::get('user/{id}/articles',[ArticleController::class, 'article_user']);
Route::post('articles/{id}/comments',[CommentController::class, 'create_comment']);
Route::get('articles/{id}/comments',[CommentController::class, 'show_comment']);