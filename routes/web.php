<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()  {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/profile', function () {
    $nama = 'Ummi Aulia';
    //return view('profile' , compact ('nama'));
    return view('profile')->with('nama', $nama);
});

Route::get('array',function(){
    //Infinite Loop
    $nilai_awal = 1;
    while ($nilai_awal <= 100) {
         echo 'Hello Laravel ' . $nilai_awal . 'x<br>';
         $nilai_awal++;
    }
});