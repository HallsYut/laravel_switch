<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('switch');
});

Route::get('/switch_detail/{id}', function ($id) {
    return view('switch_detail',compact('id'));
})->name('switch_detail');