<?php

use App\Http\Controllers\ContactController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('test', function () {
    return view('testing');
});
// Route::get('test', function () {
//     return view('test');
// });
// Route::get('login', function () {
//     return view('login');
// });
// Route::get('admin', function () {
//     return view('admin');
// });


Route::post('TgBotSend', 'App\Http\Controllers\TgBotController@send')->name('TgBotSend');
Route::get('/', 'App\Http\Controllers\HomePageController@get' )->name('home.blade'); 
Route::post('admin_edit/submit', 'App\Http\Controllers\ArticleController@submit' )->name('edit'); 
Route::post('admin_edit/price_add', 'App\Http\Controllers\PriceController@price_add' )->name('price'); 