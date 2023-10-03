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
Route::get('/products', function () {
    return view('characters', [
        "characters" => config("comics")
    ]);
})->name("characters"); 

Route::get("/", [ComicController::class, "index"])->name("comics");

// C.R.U.D. ROUTES

// CREATE
Route::get("/comics/create", [ComicController::class, "create"])->name("comics.create");
Route::post("/comics", [ComicController::class, "store"])->name("comics.store");

// READ
Route::get("/comics", [ComicController::class, "index"])->name("comics.index");
Route::get("/comics/{comics}", [ComicController::class, "show"])->name("comics.show");

// UPDATE
Route::get("/comics/{id}/edit", [ComicController::class, "edit"])->name("comics.edit");
Route::put("/comics/{id}", [ComicController::class, "update"])->name("comics.update");
// Route::patch("/comics/{id}", [ComicController::class, "update"])->name("comics.update");
// Route::match(["patch", "put"], "/comics/{id}", [ComicController::class, "update"])->name("comics.update");

// DESTROY
Route::delete("/comics/{id}", [ComicController::class, "destroy"])->name("comics.destroy");