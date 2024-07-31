<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HpController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hp", [HpController::class, "index"]);

Route::delete('/hp/{id}', [HpController::class, 'destroy'])->name('hp.destroy');

Route::get("/hp/create", [HpController::class, "create"])->name("hp.create");
Route::post("/hp", [HpController::class, "store"])->name("hp.store");

Route::get("/hp/{id}", [HpController::class, "edit"]);
Route::put("/hp/{id}", [HpController::class, "update"])->name("hp.update");