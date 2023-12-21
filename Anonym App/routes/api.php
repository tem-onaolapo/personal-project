<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/myquestions', [PostsController::class, 'myQuestions']);
    // Route::get('posts', [PostsController::class, 'index']);
    Route::apiResource('posts', PostsController::class)->only('store', 'update', 'destroy');
    // Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);
});
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/{post}', [PostsController::class, 'show']);
Route::post('/posts/{post}/comments', [CommentController::class, 'store']);
Route::get('/posts/{post}/comments', [CommentController::class, 'postcomment']);
Route::get('/comments', [CommentController::class, 'index']);
