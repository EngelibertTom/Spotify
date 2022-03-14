<?php

use App\Http\Controllers\FirstControler;
use Illuminate\Support\Facades\Route;

Route::get('/',[FirstControler::class, "index"]);
Route::get('/about',[FirstControler::class, "about"]);
Route::get("/article/{id}", [FirstControler::class, "article"])->where("id", "[0-9]+");
Route::get("/nouvelle/chanson", [FirstControler::class, "nouvellechanson"])->middleware('auth');
Route::post("/chanson/store", [FirstControler::class,"storechanson"])->middleware('auth');

Route::get('users/{id}', [FirstControler::class, "users"])->where("id","[0-9]+");
Route::get('/suivre/{id}', [FirstControler::class, "suivre"])->where("id","[0-9]+")->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
