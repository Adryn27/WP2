<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', [HelloWorldController::class,'index']);
Route::get('ambilfile', [HelloWorldController::class, 'ambilFile']);
Route::get('getlorem', [HtmlController::class, 'getlorem']);
Route::get('gettabel', [LatihanController::class, 'getTabel']);
Route::get('getform', [LatihanController::class, 'getForm']);