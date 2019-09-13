<?php


Route::get('/', function () {
    return view('layouts.home');
})->name('home');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/order', function () {
    return view('order.index');
})->name('order');
Route::get('/about', function () {
    return view('about.index');
})->name('about');
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
Route::get('/checkout', function () {
    return view('order.checkout');
})->name('checkout');
Route::get('/admin',function () {
    return view('auth.admin');
})->name('admin');
