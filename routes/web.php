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
    $npm = [123,124,125,126];
    $nama = ['Tata', 'Tita', 'Tini', 'Tina'];
    $jumlah = count($npm);
    return view('mahasiswa' ,compact('npm','jumlah','nama'));
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

Route::get('array',function(){
    for ($i=1; $i <= 5; $i++) {
        echo 'Hello World ' . $i . 'x<br>';
    }
});