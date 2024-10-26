<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function(){

    Route::get('set','setCache')->name('setCache');

    Route::get('get','getCache')->name('getCache');

});
