<?php

use App\http\Controllers\FibonacciController;
use App\http\Controllers\HomeController;
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


Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/fibonacci', function () {
    return view('admin/fibonacci');
});

Route::get('/fibonacci',[HomeController::class, 'index']);
Route::get('/fibonacci', [FibonacciController::class, 'index'])->middleware(['auth', 'verified'])->name('fibonacci');
Route::post('/fibonacci', [FibonacciController::class,'output'])->name('fibonacci');

require __DIR__.'/auth.php';
