<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Admin.login');
});

//Master
Route::get('/master', [AdminController::class, 'index']);


Route::get('/settingMenu', function () {
    return view('Admin.settingMenu');
});

Route::get('/tabelKategori_1', function () {
    return view('Admin.tabelKategori_1');
});

Route::get('/tabelKategori_2', function () {
    return view('Admin.tabelKategori_2');
});

Route::get('/tabelKategori_3', function () {
    return view('Admin.tabelKategori_3');
});

Route::get('/tabelPekerja_1', function () {
    return view('Admin.tabelPekerja_1');
});

Route::get('/tabelPekerja_2', function () {
    return view('Admin.tabelPekerja_2');
});

Route::get('/tabelSoal_1', function () {
    return view('Admin.tabelSoal_1');
});

Route::get('/tabelSoal_2', function () {
    return view('Admin.tabelSoal_2');
});

Route::get('/tabelSoal_3', function () {
    return view('Admin.tabelSoal_3');
});

Route::get('/updateSection', function () {
    return view('Admin.updateSection');
});

Route::get('/lembar_1', function () {
    return view('Admin.lembar_1');
});

Route::get('/lembar_2', function () {
    return view('Admin.lembar_2');
});

Route::get('/formKategori_1', function () {
    return view('Admin.formKategori_1');
});

Route::get('/formKategori_2', function () {
    return view('Admin.formKategori_2');
});

Route::get('/formKategori_3', function () {
    return view('Admin.formKategori_3');
});

Route::get('/formPekerja_1', function () {
    return view('Admin.formPekerja_1');
});

Route::get('/formPekerja_2', function () {
    return view('Admin.formPekerja_2');
});


