<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;

//Route::post('/address', [AddressController::class, 'store'])->name('address.store');


// Display add address form
Route::get('/address/create', [AddressController::class, 'create'])->name('address.create');

// Handle add product form submission
Route::post('/address', [AddressController::class, 'store'])->name('address.store');

// Display all address
Route::get('/address', [AddressController::class, 'index'])->name('address.index');


Route::get('/', function () {
    return view('auth.register');
});
// Route::get('/address/{userId}', [AddressController::class, 'index'])->name('address.index');

Route::get('/login', function () {
    return view('login');
});




// Display the login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle the login form submission
Route::post('/login', [LoginController::class, 'login']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


