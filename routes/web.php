<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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

//tblleads :
//tblinvoices :
//tblestimate_requests
//tblprojects :
//tblproposals:
//tbltasks:

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class , 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard1', [DashboardController::class , 'index'])->middleware(['auth'])->name('dashboard1');
Route::get('/dashboard2', [HomeController::class , 'index'])->middleware(['auth'])->name('dashboard2');
Route::get('/dashboard3', [HomeController::class , 'index'])->middleware(['auth'])->name('dashboard3');
Route::get('/dashboard4', [HomeController::class , 'index'])->middleware(['auth'])->name('dashboard4');

// Route::get('/', function () {
//     return view('layouts.admin');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
