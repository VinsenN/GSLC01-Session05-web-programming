<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::redirect('/home', '/');

Route::get('/mahasiswa', function () {
    $dataMhs = ["Helen Hickey" => 80,
            "Tim Atkinson" => 70,
            "Allison Buck" => 100,
            "Maggie Francis" => 50,
            "Betsy Macias" => 100,
            "Debora Weeks" => 40 ,
            "Kris Hurd" => 100,
            "Janie Carson" => 70,
            "Rachel Wyatt" => 100,
            "Shelly Hayden" => 90];

    return view('mahasiswa')
        -> with('mahasiswa', $dataMhs)
        -> with('class', 'LH01');
});

Route::get('/dosen', function () {
    $dataDsn = [];

    return view('dosen')
        -> with('dosen', $dataDsn)
        -> with('class', 'LH01');
});

