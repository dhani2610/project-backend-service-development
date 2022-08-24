<?php

use App\Http\Controllers\ApprovalRegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryLogController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\RegisterController;
use App\Models\Pemesanan;
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
    return view('homepage.index');
})->name('homepage');

Route::get('/pembuatan-website', function () {
    return view('pembuatan-website.index');
})->name('pembuatan-website');

Route::get('/kontak', function () {
    return view('kontak.index');
})->name('kontak');

Route::get('/android', function () {
    return view('android.index');
})->name('android');

Route::get('/internet-marketing', function () {
    return view('internet-marketing.index');
})->name('internet-marketing');

Route::get('/domain-hosting', function () {
    return view('domain-hosting.index');
})->name('domain-hosting');

Route::get('/portfolio', function () {
    return view('portfolio.index');
})->name('portfolio');

Route::get('/login-kuy', function () {
    $data['page_title'] = "Login";
    return view('auth.login', $data);
})->name('user.login');

Route::middleware('auth:web')->group(function () {
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');
    
    Route::get('approval-list', [ApprovalRegisterController::class, 'index'])->name('approval-list');
    Route::post('approve-register/{id}', [ApprovalRegisterController::class, 'approval'])->name('approve-register');
    // Master Data
     Route::get('master-data', function () {
        $data['page_title'] = 'Master Data';
        $data['breadcumb'] = 'Master Data';
        return view('master-data.index', $data);
    })->name('master-data.index');

    // Departement
    Route::resource('departements', DepartementController::class);

    // Users
    Route::patch('change-password', [UserController::class, 'changePassword'])->name('users.change-password');
    Route::resource('users', UserController::class)->except([
        'show'
    ]);;
    
    // History Log
    Route::resource('history-log', HistoryLogController::class)->except([
        'show', 'create', 'store', 'edit', 'update'
    ]);;

    // profilr edit
    Route::resource('profile', ProfileController::class)->except([
        'show','create', 'store'
    ]);;

    Route::patch('change-password-profile', [ProfileController::class, 'changePassword'])->name('profile.change-password');

    Route::get('/filter-chart', [DashboardController::class, 'filterChart'])->name('filter-chart');

    // Pemesanan
    Route::get('/pemesanan-create', [PemesananController::class, 'index'])->name('pemesanan-create');
    Route::get('/pemesanan-cek', [PemesananController::class, 'cekPesanan'])->name('pemesanan-cek');
    Route::get('/pemesanan-edit/{id}', [PemesananController::class, 'edit'])->name('pemesanan-edit');
    Route::post('/pemesanan-store', [PemesananController::class, 'store'])->name('pemesanan-store');
    Route::post('/pemesanan-delete/{id}', [PemesananController::class, 'destroy'])->name('pemesanan-delete');
    Route::post('/pemesanan-update', [PemesananController::class, 'update'])->name('pemesanan-update');
    // Route::get('/filter-chart', [DashboardController::class, 'filterChart'])->name('filter-chart');


});

