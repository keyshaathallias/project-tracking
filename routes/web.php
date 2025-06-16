<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/dashboard', function () {
        return view('client.pages.dashboard');
    });
    Route::resource('projects', ProjectController::class);
    Route::get('/detail-project', function () {
        return view('client.pages.detailProject');
    });
    Route::get('/inquiry', function () {
        return view('client.pages.inquiry');
    });
    Route::get('/profile', function () {
        return view('client.pages.profile');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // Buat view ini jika belum ada
    });
    // Tambah route admin lain di sini
});

// Route::get('/projects', function () {
//     return view('client.pages.projects');
// });

// Route::get('/detail-project', function () {
//     return view('client.pages.detailProject');
// });

// Route::get('/inquiry', function () {
//     return view('client.pages.inquiry');
// });

// Route::get('/create-inquiry', function () {
//     return view('client.pages.createInquiry');
// });
