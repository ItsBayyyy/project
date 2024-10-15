<?php

use App\Http\Controllers\AhliWarisController;
use App\Http\Controllers\KerabatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CsrfTokenController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\RekeningController;


Route::get('/', function () {
    return view('home');
});
// Route::get('/about', [AuthController::class, 'about']);


// ROUTE FOR login
Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');  // Add route name
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');

// ROUTE FOR register
Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');  // Add route name
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.submit');

// ROUTE FOR forgot_password
Route::get('/forgot_password', function () {
    return view('auth.forgot_password');
})->name('auth.forgot_password');  // Add route name
Route::post('/forgot_password', [AuthController::class, 'forgotPassword'])->name('auth.forgot_password.submit');

// ROUTE FOR reset_password
Route::get('/reset_password/{param_id}/{activation_key}', [AuthController::class, 'showResetPasswordForm']);
Route::post('/reset_password', [AuthController::class, 'resetPassword'])->name('auth.reset_password.submit');

// ROUTE FOR reset_password
Route::get('/auth/activate/{param_id}/{activation_key}', [AuthController::class, 'activate']);
// Route::post('/activate', [AuthController::class, 'activate'])->name('auth.activate.submit');

// csrf
Route::get('/csrf-token', [CsrfTokenController::class, 'generateCsrfToken']);

// ROUTE FOR dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// ROUTE FOR profile
Route::get('/setting_profile', [ProfileController::class, 'getData'])->name('setting_profile');
Route::post('/setting_profile', [ProfileController::class, 'changePassword'])->name('dashboard.setting_profile.submit');

Route::get('/pages_profile', [AhliWarisController::class, 'profilePage'])->name('pages.profile');
// Route::get('/setting_profile/kerabat', [ProfileController::class, 'getAllKerabat'])->name('dashboard.setting_profile.getAllKerabat');

// Route untuk halaman rekening
Route::get('/testing_data', [RekeningController::class, 'combinedPage'])->name('testing_rekening.page');

// Route untuk menambah rekening
Route::post('/testing_rekening/add', [RekeningController::class, 'addRekening'])->name('testing_rekening.add');

// Route untuk menghapus rekening berdasarkan ID
Route::post('/testing_rekening/delete/{id}', [RekeningController::class, 'deleteRekening'])->name('testing_rekening.delete');



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
