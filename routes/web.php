<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LavageController;
use App\Http\Controllers\ReparationController;
use Illuminate\Support\Facades\Route;


Route::get('/accueil', [HomeController::class, 'home']);


Route::get('/',[AuthController::class, 'loginForm']);
Route::get('/registre',[AuthController::class, 'registreForm']);
Route::post('/registre_save', [AuthController::class, 'registre']);
Route::post('/login_save', [AuthController::class, 'login']);

Route::get('/ajouter-lavage', [LavageController::class, 'ajoutForm']);
Route::post('/ajout_save',[LavageController::class,'ajout_save']);
Route::get('/liste-lavage', [LavageController::class, 'liste']);
Route::get('/modif_form/{id}', [LavageController::class, 'modif_form']);
Route::post('/update_lavage/{id}', [LavageController::class,'update_lavage']);
Route::get('/telechargerPdf', [LavageController::class, 'telechargement']);


Route::get('/liste-reparation', [ReparationController::class, 'liste']);
Route::post('/reparation_save',[ReparationController::class,'ajout_save']);
Route::get('/ajouter-reparation', [ReparationController::class, 'ajoutForm']);
Route::get('/modif_form/{id}', [ReparationController::class,'modif_form']);
Route::post('/update_reparation/{id}', [ReparationController::class, 'update_reparation']);
Route::get('/telechargerPdf', [ReparationController::class, 'telechargement']);




Route::get('/liste-abonnement', [AbonnementController::class,'liste']);
Route::get('/ajouter-abonnement', [AbonnementController::class, 'ajoutForm']);

Route::get('/contact', [AbonnementController::class,'contact']);