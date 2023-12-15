<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestTrialController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/')->group(function () {
    Route::get('/', [Controller::class, 'index'])->name('index');
    Route::post('/request-trial/store', [RequestTrialController::class, 'store'])->name('request-trial.store');
    Route::get('/thank-you', [Controller::class, 'thank_you'])->name('thank_you');
});
