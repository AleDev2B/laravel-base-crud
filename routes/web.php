<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'RistorantiController@index') -> name('home');

Route::get('/ristorante/{id}', 'RistorantiController@show') -> name('showRistorante');
