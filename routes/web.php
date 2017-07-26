<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
})->name('home');
Route::get('/user', function () {
    return view('admin.users.detail-user');
});
Route::get('/categories', function () {
    return view('admin.categories.list-categories');
});
Route::get('/food', function () {
    return view('admin.food.list-food');
});
Route::get('/material', function () {
    return view('admin.material.list-material');
});
Route::get('/orders', function () {
    return view('admin.orders.list-orders');
});