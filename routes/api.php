<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReceptekController;
use App\Http\Controllers\KategoriakController;

Route::get('/receptek', [ReceptekController::class, 'index']);
Route::post('/receptek', [ReceptekController::class, 'store']);
Route::delete('/receptek/{id}', [ReceptekController::class, 'destroy']);
Route::get('/receptek/kategoriak/{kat_id}', [ReceptekController::class, 'szures']);

Route::get('/kategoriak', [KategoriakController::class, 'index']);
/*
GET /receptek → lista
POST /receptek → új
DELETE /receptek/{id} → törlés
GET /receptek/kategoriak/{kat_id} → szűrés
GET /kategoriak → dropdown
*/
