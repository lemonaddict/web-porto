<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', [MainController::class, 'HomePage']);

Route::get('/', function () {
    return view('landing.mainpage');
});

Route::get('/form', function () {
    return view('form');
});

Route::resource('comments', 'App\Http\Controllers\CommentController');

Route::resource('comments', CommentController::class);

Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
