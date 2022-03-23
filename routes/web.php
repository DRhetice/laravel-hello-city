<?php

use Illuminate\Support\Facades\Route;


Route::view('/','pages/home')->name('home');

Route::get('about-us', function(){
    return view('pages/about');
})->name('about');
