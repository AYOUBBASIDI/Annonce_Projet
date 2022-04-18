<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('login');
});

Route::get('/annonces', function () {
    return view('annonces');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/yourorder', function () {
    return view('orderprofile');
});
Route::get('/yourannonce', function () {
    return view('annonprofile');
});

Route::get('user',[UserController::class, 'index']);
Route::post('addUser',[UserController::class, 'addUser']);
Route::post('loginUser',[UserController::class, 'loginUser']);
Route::get('profile',[UserController::class, 'profile']);
Route::get('logout',[UserController::class, 'logout']);
Route::post('addPost',[UserController::class, 'addPost']);

