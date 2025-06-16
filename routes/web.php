<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:client'])->group(function () {
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
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // Buat view ini jika belum ada
    });
    // Tambah route admin lain di sini
});

Route::get('/projects', function () {
    return view('client.pages.projects');
});

Route::get('/project-detail', function () {
    return view('client.pages.projectDetail');
});

Route::get('/inquiry', function () {
    return view('client.pages.inquiry');
});

Route::get('/create-inquiry', function () {
    return view('client.pages.createInquiry');
});

Route::get('/inquiry-detail', function () {
    return view('client.pages.inquiryDetail');
});

Route::get('/payment', function () {
    return view('client.pages.payment');
});

