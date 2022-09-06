<?php

use App\Http\Controllers\FirstPartyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\FirstParty;
use App\Models\Newsletter;
use App\Models\User;
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

/**
 * User Route
 */

// Dashboard
Route::get('/', [LoginController::class, "index"])->middleware('guest');
Route::get('/home', [UserController::class, "index"])->middleware('auth');

// Form
Route::get('/newsletter', [NewsletterController::class, "show"])->middleware('auth');

// Form Newsletter
Route::post('/newsletter', [NewsletterController::class, 'store'])->middleware('auth');

// Get data First Party
Route::get('/form/{id}', [FirstPartyController::class, 'getSelectedFirstParty'])->middleware('auth');

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// Login
Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/storage', [NewsletterController::class, 'getAllNewsLetter'])->middleware('auth');

Route::get('/storage/{newsletter:id}/edit', [NewsletterController::class, 'edit'])->middleware('auth');
Route::get('/newsletter/{newsletter:id}', [NewsletterController::class, 'getLetterById'])->middleware('auth');
Route::post('/storage/{newsletter:id}', [NewsletterController::class, 'update'])->middleware('auth');