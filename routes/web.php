<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\PolicyController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('gioi-thieu',[IntroduceController::class, 'index'])->name('introduce');
Route::get('chinh-sach',[PolicyController::class, 'index'])->name('policy');

