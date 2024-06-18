<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/logout', function () {
    return view('auth/login');
});

Route::get('/category', [CategoryController::class, 'getIndex']);

Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);

Route::get('/category/create', [CategoryController::class, 'getCreate']);

Route::post('/category', [CategoryController::class, 'store']);

Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);

Route::put('/category/{category}', [CategoryController::class, 'update']);



Route::get('/post', [PostController::class, 'getIndex']);

Route::get('/post/category/{id}', [PostController::class, 'getIndexbyCategory']);

Route::get('/post/show/{id}', [PostController::class, 'getShow']);

Route::get('/post/create', [PostController::class, 'getCreate']);

Route::post('/post', [PostController::class, 'store']);

Route::get('/post/edit/{id}', [PostController::class, 'getEdit']);

Route::put('/post/{post}', [PostController::class, 'update']);