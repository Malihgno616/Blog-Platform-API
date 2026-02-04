<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/{id}', [PostsController::class, 'show']);
Route::get('/posts?term=', [PostsController::class, 'search']);
Route::post('/posts', [PostsController::class, 'store']);
Route::put('/posts/{id}', [PostsController::class, 'update']);
Route::patch('/posts/{id}', [PostsController::class, 'update']);
Route::delete('/posts/{id}', [PostsController::class, 'destroy']);
