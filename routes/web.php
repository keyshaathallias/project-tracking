<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.login');
});

Route::get('/dashboard', function () {
    return view('client.pages.dashboard');
});

Route::get('/projects', function () {
    return view('client.pages.projects');
});

Route::get('/detail-project', function () {
    return view('client.pages.detailProject');
});

Route::get('/inquiry', function () {
    return view('client.pages.inquiry');
});

Route::get('/create-inquiry', function () {
    return view('client.pages.createInquiry');
});
