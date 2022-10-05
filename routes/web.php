<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\SocialAuthController;
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
    return view('welcome');
});
Route::get('/login/google/{provider}', [SocialAuthController::class,'redirectToProvider'])->name('login-google');
Route::get('/login/{provider}/callback', [SocialAuthController::class,'handleProviderCallback']);
Route::get('/login/facebook/{provider}', [SocialAuthController::class,'redirectToProvider'])->name('login-facebook');
Route::get('/login/{provider}/callback', [SocialAuthController::class,'handleProviderCallback']);
Route::get('/login/github/{provider}', [SocialAuthController::class,'redirectToProvider'])->name('login-github');
Route::get('/login/{provider}/callback', [SocialAuthController::class,'handleProviderCallback']);

Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');
Route::get('/table', [DashBoardController::class, 'table'])->name('table');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile-index');


require __DIR__.'/auth.php';
