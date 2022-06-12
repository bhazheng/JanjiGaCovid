<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\profile;
use Illuminate\Support\Facades\Auth;
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





Route::get('/',[HomeController::class,'index']);


Route::get('/home',[HomeController::class,'redirect']);

// Route::get('/home',[HomeController::class,'index']);
Route::get('/daftar',[HomeController::class,'addDaftar']);
Route::get('/faq',[HomeController::class,'tampilfaq']);
Route::get('/profile',[HomeController::class,'tampilprofile'])->name('checkprofile');
Route::post('/upload_profile',[HomeController::class,'upprofile'])->name('daftarprofile');
Route::post('/editprofile/{id}',[HomeController::class,'editprofile']);
Route::get('/editprofile',[HomeController::class,'updateprofile'])->name('pageprofile');
Route::post('/daftar', [HomeController::class, 'upload'])->name('daftarVaksin');












Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_vaccine_view',[AdminController::class,'addview']);

Route::get('/add_lkes_view',[AdminController::class,'addlokasi']);

Route::get('/add_pendaftar_view',[AdminController::class,'addpendaftar']);

Route::post('/upload_vaccine',[AdminController::class,'upload']);

Route::post('/upload_pendaftar',[HomeController::class,'upload']);

Route::post('/upload_layanan_kesehatan',[AdminController::class,'uploadLKes']);

Route::get('/deleteVaksin/{id}',[AdminController::class,'deleteVaksin']);

Route::get('/deleteLokasi/{id}',[AdminController::class,'deleteLokasi']);

Route::get('/deletePendaftar/{id}',[AdminController::class,'deletePendaftar']);

Route::get('/updateVaksin/{id}',[AdminController::class,'updateVaksin']);

Route::get('/updateLokasi/{id}',[AdminController::class,'updateLokasi']);

Route::get('/updatePendaftar/{id}',[AdminController::class,'updatePendaftar']);

Route::post('/editLokasi/{id}',[AdminController::class,'editLokasi']);

Route::post('/editVaksin/{id}',[AdminController::class,'editVaksin']);

Route::post('/editPendaftar/{id}',[AdminController::class,'editPendaftar']);
