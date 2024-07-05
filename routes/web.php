<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/items/ricerca', [HomeController::class, 'search'])->name('items.search');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('sendEmail');

Route::get('admin/shop', function () {
    return view('admin.shop');
})->name('admin.shop');


Route::get('/admin/items', [ItemController::class, 'index_admin'])->name('admin.items.index');

Route::get('/admin/items/create', [ItemController::class, 'create'])->name('admin.items.create');

Route::post('/admin/items/store', [ItemController::class, 'store'])->name('admin.items.store');

Route::get('/admin/items/{id}', [ItemController::class, 'show'])->name('admin.items.show');

Route::get('/admin/items/{id}/edit', [ItemController::class, 'edit'])->name('admin.items.edit');

Route::put('/admin/items/{id}/update', [ItemController::class, 'update'])->name('admin.items.update');

Route::delete('/admin/items/{id}', [ItemController::class, 'destroy'])->name('admin.items.destroy');
