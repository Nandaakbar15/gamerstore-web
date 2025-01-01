<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route("login");
});

// route login
Route::get("/login", "App\Http\Controllers\LoginController@login")->name("login");
Route::post("/login", "App\Http\Controllers\LoginController@cekLogin");
Route::get("/logout", "App\Http\Controllers\LoginController@logout");


// route register
Route::get("/register",  "App\Http\Controllers\RegisterController@register");
Route::post("/register", "App\Http\Controllers\RegisterController@cekRegister");

// route admin
Route::middleware(['web', 'auth', 'checkRole:admin'])->prefix("admin")->group(function() {
    Route::get("/home", "App\Http\Controllers\AdminController@index");
    Route::get("/datagame", "App\Http\Controllers\GameController@index");
    Route::get("/viewtambahdatagame", "App\Http\Controllers\GameController@create");
    Route::post("/tambahgame", "App\Http\Controllers\GameController@store");
    Route::get("/viewubahdatagame/{game}", "App\Http\Controllers\GameController@edit");
    Route::put("/ubahdatagame/{game}", "App\Http\Controllers\GameController@update");
    Route::delete("/hapusdatagame/{game}", "App\Http\Controllers\GameController@destroy");
    Route::get("/datakonsol", "App\Http\Controllers\KonsolController@index");
    Route::get("/viewtambahdatakonsol", "App\Http\Controllers\KonsolController@create");
    Route::post("/tambahkonsol", "App\Http\Controllers\KonsolController@store");
    Route::get("/viewubahdatakonsol/{konsol}", "App\Http\Controllers\KonsolController@edit");
    Route::get("/datauser", "App\Http\Controllers\DataUserController@index");
    Route::delete("/datauser/{user}", "App\Http\Controllers\DataUserController@deleteUser");
});

// route pelanggan
Route::prefix('pelanggan')->group(function() {
    Route::get("/dashboardpelanggan", "App\Http\Controllers\PelangganController@index");
});