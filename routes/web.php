<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthController;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm']);
Route::post('/login', [LoginController::class,'login'])->name('login');


// Route::prefix('admin')->namespace('Admin')->middleware(['auth'])->group(function () {
//     //
//     Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
//     Route::get('/logout', [App\Http\Controllers\HomeController::class, 'perform'])->name('logout.perform');
// });


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/logout', [HomeController::class, 'perform'])->name('logout.perform');

    Route::resource('new', '\App\Http\Controllers\NewController');
    Route::resource('product', '\App\Http\Controllers\ProductController');
    Route::resource('bussines', '\App\Http\Controllers\BussinesController');

});


Route::post('uploadx', [App\Http\Controllers\CKEditorController::class, 'upload'])->name('uploadx');
