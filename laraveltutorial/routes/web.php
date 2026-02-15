<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'welcome'])->name('welcome');
Route::get('/index/{name}',[HomeController::class,'index'])->name('index');


Route::get('/category/form',[CategoryController::class,'form'])->name('category.form');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/show',[CategoryController::class,'show'])->name('category.show');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');


Route::get('/product/form',[ProductController::class,'form'])->name('product.form');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/product/show',[ProductController::class,'show'])->name('product.show');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');


Route::get('/session/form',[SessionController::class,'form'])->name('session.form');
Route::post('/session/store',[SessionController::class,'store'])->name('session.store');
Route::get('/session/show',[SessionController::class,'show'])->name('session.show');
Route::get('/session/edit/{id}',[SessionController::class,'edit'])->name('session.edit');
Route::post('/session/update/{id}',[SessionController::class,'update'])->name('session.update');
Route::get('/session/delete/{id}',[SessionController::class,'delete'])->name('session.delete');


Route::get('/signup',[AuthController::class,'signup'])->name('signup');
Route::post('/register',[AuthController::class,'register'])->name('register');
