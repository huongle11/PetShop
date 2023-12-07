<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::resource('product',ProductController::class);
Route::post('login',[AuthController::class,"login"])->name("login");
Route::get('/',[ProductController::class,"create"]);

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    
    Route::get('/add', function () {
        return view('add');
    });

    Route::get('/edit', function () {
        return view('edit');
    });

    Route::get('/login', function () {
        return view('page_login');
    });

    Route::get('/register', function () {
        return view('page_register');
    });
    Route::get('/cart', function () {
        return view('user.tables_data');
    });

// Route::get('/product', function () {
//     return view('product');
// });
