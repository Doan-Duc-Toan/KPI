<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('page', ['home']);
});
Route::get('/chat',[ChatController::class,'index'])->name('chat');
Route::post('/chat/gpt',[ChatController::class,'__invoke'])->name('chatgpt');
Route::get('/app/{page}', [Controller::class, 'index'])->name('page');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/recover', [UserController::class, 'recover'])->name('recover');
Route::get('/setting/status', [UserController::class, 'settingStatus'])->name('setting_status');
Route::get('/setting/type', [UserController::class, 'settingType'])->name('setting_type');
Route::get('/list_kpi/status', [UserController::class, 'kpiStatus'])->name('kpi_status');
