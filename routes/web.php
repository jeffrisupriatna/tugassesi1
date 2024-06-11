<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar/{id}', function($id){
    return view('data_daftar', ['nama' => 'budi', 'kelas' => 'programmer', 'id' => $id]);
});