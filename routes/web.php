<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.about'); // ให้หน้า About เป็นหน้าแรก
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/experience', function () {
    return view('pages.experience'); // อย่าลืมใส่ @extends('layout.app') และ @section('content') ในไฟล์นี้ด้วย
});

Route::get('/skill', function () {
    return view('pages.skill');
});

Route::get('/work', function () {
    return view('pages.work');
});

Route::get('/contract', function () {
    return view('pages.contract');
});
