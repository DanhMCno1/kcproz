<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SignInController;
use App\Http\Controllers\Admin\ProductController;


Route::middleware('unauth:admin')->group(function () {
    Route::get('admin/signin', [SignInController::class, 'create'])->name('admin.signin');
    Route::post('admin/signin', [SignInController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin')->name('admin.')->group(function () {
    Route::resource('orders', ProductController::class);
});
