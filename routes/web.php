<?php

use Illuminate\Support\Facades\Route;

// creo rotta pagina principale
Route::get('/', function () {
    return view('welcome');
});

// creo rotta e richiamo dati da funzione dataIndex in MainController
Route::get('/risultato', 'MainController@dataIndex') -> name('index');
