<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\dynamiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\buyingController;
use App\Http\Controllers\adminController;


Route::get('/', [mainController::class,'home'])->name('home');
Route::get('/cars', [mainController::class,'cars'])->name('cars');
Route::get('/products', [mainController::class,'products'])->name('products');
Route::get('/info', [mainController::class,'info'])->name('info');

// dynamic routes GET
Route::get('/cars/{id}', [dynamiController::class,'oneCar'])->name('oneCar')->where('id', '[0-9]+');

Route::get('/products/{id}', [dynamiController::class,'oneProducts'])->name('oneProducts')->where('id', '[0-9]+');

Route::get('/info/{slug}', [dynamiController::class,'oneInfo'])->name('oneInfo')->where('slug', '[A-Za-z]+');


// dynamic routes POST


Route::post('/cars/{id}', [buyingController::class,'oneCar'])->where('id', '[0-9]+');

Route::post('/products/{id}', [buyingController::class,'oneProducts'])->where('id', '[0-9]+');



// admin routes GET
Route::get('/admin', [adminController::class,'admin'])->name('admin');
Route::get('/admin/dashboard', [adminController::class,'adminDashboard'])->name('adminDashboard');

// admin routes POST
Route::post('/admin', [adminController::class,'adminLogin'])->name('adminLogin');
Route::post('/add/cars', [adminController::class,'addCar'])->name('addCar');
Route::post('/add/products', [adminController::class,'addProduct'])->name('addProduct');
Route::post('/add/info', [adminController::class,'addInfo'])->name('addInfo');


// user routes view
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
// user routes POST
Route::post('/login', [userController::class,'login'])->name('login');
Route::post('/register', [userController::class,'register'])->name('register');
Route::post('/logout', [userController::class,'logout'])->name('logout');



