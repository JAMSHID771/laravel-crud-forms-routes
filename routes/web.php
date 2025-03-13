<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::patch('/posts/{post}', [PostController::class, 'update']);
Route::put('/posts/{post}', [PostController::class, 'put']);
