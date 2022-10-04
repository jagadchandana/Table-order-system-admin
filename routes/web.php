<?php

use App\Http\Controllers\DashBoardController;
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
Route::get('/login/{provider}', [SocialAuthController::class,'redirectToProvider']);
Route::get('/login/{provider}/callback', [SocialAuthController::class,'handleProviderCallback']);

Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');
Route::get('/table', [DashBoardController::class, 'table'])->name('table');


require __DIR__.'/auth.php';
