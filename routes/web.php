<?php

use App\Http\Controllers\ContactController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::get('test', function () {
    return view('test');
});
Route::get('login', function () {
    return view('login');
});
Route::get('admin', function () {
    return view('admin');
});

// Route::get('/', 'App\Http\Controllers\ArticleController@fistArticle' )->name('home.blade'); 
Route::get('/', 'App\Http\Controllers\PriceController@Price' )->name('home.blade'); 
// Route::get('admin_edit_hook/article', 'App\Http\Controllers\ArticleController@allArticle' )->name('article-list'); 
Route::post('admin_edit_hook/submit', 'App\Http\Controllers\ArticleController@submit' )->name('edit'); 