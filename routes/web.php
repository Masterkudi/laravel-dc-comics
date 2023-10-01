<?php

use App\Http\Controllers\ComicController;
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

Route::get("/comics", [ComicController::class, "index"])->name("comics.index");

Route::get("/", [ComicController::class, "index"])->name("comics");

Route::get('/comics', function () {
    return view('comics', [
        "comics" => config("comics")
    ]);
})->name("comics"); 


