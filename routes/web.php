<?php

use Illuminate\Support\Facades\Route;

Route::get('/counter', function () {
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