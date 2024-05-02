<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function () {
    return view('dosen');

});
Route::get('/dosen/index', function () {
    return view ('dosen.index');

});

Route::get('/fakultas', function () {
    // return view('fakultas.index',["ilkom" => "fakultas ilmu komputer dan rekayasa"]);
    // return view('fakultas.index',["Fakultas" => ["fakultas ilmu komputer dan rekayasa","fakultas ilmu ekonomi dan bisnis"]]);
    $fakultas = ["Fakultas ILKOM UMDP","Fakultas EKONOMI UMDP"];
    return view ('fakultas.index',compact('fakultas'));
});
