<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
})->name('counter');

Route::get('/calculator', function () {
	return view('calculator');
})->name('calculator');

Route::get('/todo-list', function () {
	return view('todo-list');
})->name('todo-list');

Route::get('/cascanding-dropdown', function () {
	return view('cascanding-dropdown');
})->name('cascanding-dropdown');

Route::get('/product-search', function () {
	return view('product-search');
})->name('product-search');

Route::get('/image-upload', function () {
	return view('image-upload');
})->name('image-upload');

Route::get('/register-form', function () {
	return view('register-form');
})->name('register-form');