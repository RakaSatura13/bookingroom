<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\controllers\Auth\LoginController;
use App\Http\controllers\DashboardController;
use App\Http\controllers\Admin\AdminController;
use App\Http\controllers\Admin\HotelController;
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

Route::get('/google-login', [GoogleController::class,'redirectToProvider'])->name('login.google');
Route::get('/auth/google/callback', [GoogleController::class,'handleProviderCallback']);
Route::get('/login',[LoginController::class,'login'])->name('login');

Route::get('/',[DashboardController::class,'index']);

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/hotel',[HotelController::class,'index'])->name('hotel');
Route::get('/admin/hotel/add',[HotelController::class,'add'])->name('addhotel');
Route::post('/admin/hotel/add',[HotelController::class,'store'])->name('storehotel');

Route::get('/admin/hotel/edit/{id}',[HotelController::class,'edit'])->name('edithotel');
Route::post('/admin/hotel/edit',[HotelController::class,'update'])->name('updatehotel');

Route::get('/admin/hotel/delete/{id}',[HotelController::class,'delete'])->name('deletehotel');

Route::get('/home', function () {
    return view('dashboard');
})->name('home');

Route::get('/accomodation',function(){
    return view('accomodation');
})->name('accomodation');
