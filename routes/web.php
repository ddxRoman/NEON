<?php

use App\Http\Controllers\ContactController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
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
Route::get('tgbot', function () {
    \Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot6048362058:AAFv50Fltmm_0Ufa-GYzAga-poK1-niyxVo/sendMessage',
    ['chat_id'=>2116281958,
    'text'=>'Тестовое сообщение <b>ЖИРНЫМ</b>',
    'parse_mode'=>'html'
    ]);
});



Route::get('/', 'App\Http\Controllers\HomePageController@get' )->name('home.blade'); 
Route::post('admin_edit/submit', 'App\Http\Controllers\ArticleController@submit' )->name('edit'); 
Route::post('admin_edit/price_add', 'App\Http\Controllers\PriceController@price_add' )->name('price'); 