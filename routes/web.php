<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
});
Route::get('/index2', function () {
    return view('index-new');
});

Route::get('/admin.dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return view('admin.auth.login');
})->name('admin.auth.login');
Route::get('/register', function () {
    return view('admin.auth.register');
})->name('admin.auth.register');

