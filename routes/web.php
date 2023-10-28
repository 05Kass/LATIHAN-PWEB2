<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('About', [
        "name" => "Universitas Teknokrat Indonesia",
        "image" => "Teknokrat.jpg",
        "description" =>"Universitas Teknokrat Indonesia merupakan salah satu perguruan tinggi swasta yang ada di Lampung, tepatnya berada di Jalan Zainal Abidin Pagaralam No. 9-11 Labuhan Ratu, Bandar Lampung. Perguruan Tinggi yang memiliki moto disiplin, bermutu, kreatif, dan inovatif ini semula adalah sebuah lembaga pendidikan yang bernama Kursus dan Bimbingan Teknokrat. Lembaga pendidikan ini didirikan oleh Dr. H.M. Nasrullah Yusuf, S.E., M.B.A. berdasarkan izin Depdikbud (Depdiknas) Provinsi Lampung pada 19 Februari 1986.

        Pada awal pendiriannya, Kursus dan Bimbingan Teknokrat terbatas pada kursus Bahasa Inggris, Akuntansi, bimbingan Belajar, dan mengetik manual. Tenaga pengajar pada saat itu hanya dua orang yaitu Dr. H.M. Nasrullah Yusuf, S.E., M.B.A. dan istri Hj. Hernaini, S.S., M.Pd."
    ]);
});

Route::get('/blog', function () {
    return view ('Posts');
});

