<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/laptop',[LaptopController::class,'index'])->name('Laptop');
Route::get('/create',[LaptopController::class,'create'])->name('laptop.create');
Route::post('/store', [LaptopController::class,'store'])->name('laptop.store');
Route::get('/edit/{id}',[LaptopController::class,'edit'])->name('laptop.edit');
Route::post('/update/{id}',[LaptopController::class,'update'])->name('laptop.update');
Route::post('/delete/{id}',[LaptopController::class,'delete'])->name('laptop.delete');