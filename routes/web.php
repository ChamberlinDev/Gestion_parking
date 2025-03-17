<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LavageController;
use App\Http\Controllers\ReparationController;
use Illuminate\Support\Facades\Route;

Route::get('/accueil', function () {
    return view('home');
});
Route::get('/',[AuthController::class, 'loginForm']);
Route::get('/registre',[AuthController::class, 'registreForm']);
Route::post('/registre_save', [AuthController::class, 'registre']);

Route::get('/ajouter-lavage', [LavageController::class, 'ajoutForm']);
Route::post('/ajout_save',[LavageController::class,'ajout_save']);
Route::get('/liste-lavage', [LavageController::class, 'liste']);

Route::get('/liste-reparation', [ReparationController::class, 'liste']);
Route::post('/reparation_save',[ReparationController::class,'ajout_save']);
Route::get('/ajouter-reparation', [ReparationController::class, 'ajoutForm']);

Route::get('/liste-abonnement', [AbonnementController::class,'liste']);
Route::get('/ajouter-abonnement', [AbonnementController::class, 'ajoutForm']);

Route::get('/contact', [AbonnementController::class,'contact']);