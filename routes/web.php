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