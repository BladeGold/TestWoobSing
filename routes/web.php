<?php

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

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::post('/verificacion', [App\Http\Controllers\HomeController::class, 'saveVerify'])->name('emailVerify');
Route::get('/verify', function () { 
    return view('verificar');
})->middleware('auth');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/getUser', [App\Http\Controllers\HomeController::class, 'getUser'])->name('getUser');
    Route::get('/getPermission', [App\Http\Controllers\HomeController::class, 'getPermission'])->name('getPermission');
    Route::get('/getUserRol', [App\Http\Controllers\HomeController::class, 'getUserRol'])->name('getUserRol');
    Route::post('/login-two-factor/{user}', [App\Http\Controllers\Auth\LoginController::class, 'login2FA'])->name('login.2fa');

    Route::get('test', fn () => phpinfo());

