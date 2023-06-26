<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntranceController;
use App\Http\Controllers\ProvidereController;
use App\Http\Controllers\BatchesmedicationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DiscardController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\PharmasproductController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SaleController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('entrances', App\Http\Controllers\EntranceController::class);
Route::resource('provideres', App\Http\Controllers\ProvidereController::class);
Route::resource('batchesmedications',\App\Http\Controllers\BatchesmedicationController::class);
Route::resource('clients',\App\Http\Controllers\ClientController::class);
Route::resource('discards',\App\Http\Controllers\DiscardController::class);
Route::resource('medications',\App\Http\Controllers\MedicationController::class);
Route::resource('pharmasproducts',\App\Http\Controllers\PharmasproductController::class);
Route::resource('records',\App\Http\Controllers\RecordController::class);
Route::resource('sales',\App\Http\Controllers\SaleController::class);

