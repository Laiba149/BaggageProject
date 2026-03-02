<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaggageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;




Route::get('/home', [BaggageController::class, 'showhome'])->name('baggage.home');
Route::get('/about', [BaggageController::class, 'showabout'])->name('baggage.about');
Route::get('/collection', [BaggageController::class, 'showcollection'])->name('baggage.collection');
Route::get('/products/{name}', [BaggageController::class, 'showproducts'])->name('baggage.products');

Route::get('/contact', [BaggageController::class, 'showcontact'])->name('baggage.contact');


Route::get('/category/form',[CategoryController::class,'form'])->name('category.form');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/show',[CategoryController::class,'show'])->name('category.show');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');


Route::get('/product/form',[ProductController::class,'form'])->name('Product.form');
Route::post('/product/store',[ProductController::class,'store'])->name('Product.store');
Route::get('/product/show',[ProductController::class,'show'])->name('Product.show');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('Product.edit');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('Product.update');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('Product.delete');




