<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/items/ricerca', [HomeController::class, 'search'])->name('items.search');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('sendEmail');

Route::get('admin/shop', function () {
    return view('admin.shop');
})->name('admin.shop');


Route::get('/items', [ItemController::class, 'index'])->name('admin.items.index');

Route::get('/items/create', [ItemController::class, 'create'])->name('admin.items.create');

Route::post('/items/store', [ItemController::class, 'store'])->name('admin.items.store');
