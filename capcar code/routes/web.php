<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


    Route::get('/', function () {
        return view('login');
    });
    
    Route::get('/annonces', function () {
        return view('annonces');
    });
    Route::get('/orders', function () {
        return view('orders');
    });
    Route::get('/update', function () {
        return view('update');
    });
    Route::get('/yourorder', function () {
        return view('orderprofile');
    });
    Route::get('/yourannonce', function () {
        return view('annonprofile');
    });
    Route::get('/dropdown', function () {
        return view('dropdown');
    });
    
    Route::get('user',[UserController::class, 'index']);
    Route::post('addUser',[UserController::class, 'addUser']);
    Route::post('loginUser',[UserController::class, 'loginUser']);
    Route::get('profile',[UserController::class, 'profile']);
    Route::get('logout',[UserController::class, 'logout']);
    Route::post('addPost',[PostController::class, 'addPost']);
    Route::get('C_annonces',[PostController::class, 'annonce']);
    Route::get('C_orders',[PostController::class, 'order']);
    Route::get('CP_annonces',[PostController::class, 'annonceP']);
    Route::get('CP_orders',[PostController::class, 'orderP']);
    Route::get('delete/{id}',[PostController::class, 'delete']);
    Route::get('fill/{id}',[PostController::class, 'fill']);
    Route::post('fupdate',[PostController::class, 'fupdate']);



