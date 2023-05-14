<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix("/")
  ->name("guest.")
  ->group(function () {
    Route::get("/", function () {
      return view("base");
    });
    Route::get("/condition", function () {
      return view("pages.terms");
    })->name("terms");
    Route::get("/confidentialite", function () {
      return view("pages.privacy");
    })->name("privacy");
  });
