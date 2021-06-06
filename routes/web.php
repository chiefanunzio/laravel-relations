<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'homeController@home')
    ->name('home');   

Route::get('/pilot/show/{id}', 'homeController@show')
-> name('show');   

Route::get('/car/create' , 'homeController@create')
    ->name('create'); 
    
Route::post('/car/stock' , 'homeController@stock')
    ->name('stock'); 
         