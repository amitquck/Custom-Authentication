<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\Auth\RegistrationController;

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

Route::get('/', [RegistrationController::class, 'index']);
Route::post('/submit_registration', [RegistrationController::class, 'registration'])->name('submit.registration');
Route::get('/dashboard', [RegistrationController::class, 'dashboard'])->name('customer.dashboard');
