<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    Route::get("/auth/redirect", function () {
      return Socialite::driver("tiktok")->redirect();
    });
    Route::get("/auth/callback", function () {
      $user = Socialite::driver("tiktok")->user();
      dd($user);
    });
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
