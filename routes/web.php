<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//TODO CONTROLE N°2
use App\Http\Controllers\EtudiantController;
Route::get('/acc',function(){return view('pageAcc');});
Route::get('/etu', function () {return view('ajouterEtu');});
Route::post('/ajouterEtu',[EtudiantController::class,'ajouterEtu']);
Route::get('/suppEtu',[EtudiantController::class,'supprimerEtu']);
Route::get('/modifEtu',[EtudiantController::class,'trouverEtu']);
Route::post('/modifierEtu',[EtudiantController::class,'modifierEtu']);
Route::get('/liste',[EtudiantController::class,'etudiants']);
Route::get('/note',[EtudiantController::class,'note']);
Route::post('/ajouterNote',[EtudiantController::class,'ajouterNote']);
Route::get('/infoEtu',[EtudiantController::class,'infoEtu']);
Route::get('/resultat',[EtudiantController::class,'resultat']);

