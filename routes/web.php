<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\TypeVehiculeController;
use App\Http\Controllers\CarburantController;


Route::resource('utilisateurs', UtilisateurController::class);

Route::get('/', function () {
    return view('welcome');
});
// Routes des Utilisateurs
Route::get('/utilisateurs', [UtilisateurController::class, 'index'])->name('utilisateurs.index');
Route::get('/utilisateurs/create', [UtilisateurController::class, 'create'])->name('utilisateurs.create');
Route::post('/utilisateurs', [UtilisateurController::class, 'store'])->name('utilisateurs.store');
Route::get('/utilisateurs/{utilisateur}', [UtilisateurController::class, 'show'])->name('utilisateurs.show');
Route::get('/utilisateurs/{utilisateur}/edit', [UtilisateurController::class, 'edit'])->name('utilisateurs.edit');
Route::put('/utilisateurs/{utilisateur}', [UtilisateurController::class, 'update'])->name('utilisateurs.update');
Route::delete('/utilisateurs/{utilisateur}', [UtilisateurController::class, 'destroy'])->name('utilisateurs.destroy');

// Routes des chauffeurs
Route::get('/chauffeurs', [ChauffeurController::class, 'index'])->name('chauffeurs.index');
Route::get('/chauffeurs/create', [ChauffeurController::class, 'create'])->name('chauffeurs.create');
Route::post('/chauffeurs', [ChauffeurController::class, 'store'])->name('chauffeurs.store');
Route::get('/chauffeurs/{chauffeur}', [ChauffeurController::class, 'show'])->name('chauffeurs.show');
Route::get('/chauffeurs/{chauffeur}/edit', [ChauffeurController::class, 'edit'])->name('chauffeurs.edit');
Route::put('/chauffeurs/{chauffeur}', [ChauffeurController::class, 'update'])->name('chauffeurs.update');
Route::delete('/chauffeurs/{chauffeur}', [ChauffeurController::class, 'destroy'])->name('chauffeurs.destroy');

// Routes des services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

// Routes des stations
Route::get('/stations', [StationController::class, 'index'])->name('stations.index');
Route::get('/stations/create', [StationController::class, 'create'])->name('stations.create');
Route::post('/stations', [StationController::class, 'store'])->name('stations.store');
Route::get('/stations/{station}', [StationController::class, 'show'])->name('stations.show');
Route::get('/stations/{station}/edit', [StationController::class, 'edit'])->name('stations.edit');
Route::put('/stations/{station}', [StationController::class, 'update'])->name('stations.update');
Route::delete('/stations/{station}', [StationController::class, 'destroy'])->name('stations.destroy');

// Routes des véhicules
Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicules.index');
Route::get('/vehicules/create', [VehiculeController::class, 'create'])->name('vehicules.create');
Route::post('/vehicules', [VehiculeController::class, 'store'])->name('vehicules.store');
Route::get('/vehicules/{vehicule}', [VehiculeController::class, 'show'])->name('vehicules.show');
Route::get('/vehicules/{vehicule}/edit', [VehiculeController::class, 'edit'])->name('vehicules.edit');
Route::put('/vehicules/{vehicule}', [VehiculeController::class, 'update'])->name('vehicules.update');
Route::delete('/vehicules/{vehicule}', [VehiculeController::class, 'destroy'])->name('vehicules.destroy');

// Routes des types de véhicules
Route::get('/types-vehicules', [TypeVehiculeController::class, 'index'])->name('typesVehicules.index');
Route::get('/types-vehicules/create', [TypeVehiculeController::class, 'create'])->name('typesVehicules.create');
Route::post('/types-vehicules', [TypeVehiculeController::class, 'store'])->name('typesVehicules.store');
Route::get('/types-vehicules/{typeVehicule}', [TypeVehiculeController::class, 'show'])->name('typesVehicules.show');
Route::get('/types-vehicules/{typeVehicule}/edit', [TypeVehiculeController::class, 'edit'])->name('typesVehicules.edit');
Route::put('/types-vehicules/{typeVehicule}', [TypeVehiculeController::class, 'update'])->name('typesVehicules.update');
Route::delete('/types-vehicules/{typeVehicule}', [TypeVehiculeController::class, 'destroy'])->name('typesVehicules.destroy');

// Routes des carburants
Route::get('/carburants', [CarburantController::class, 'index'])->name('carburants.index');
Route::get('/carburants/create', [CarburantController::class, 'create'])->name('carburants.create');
Route::post('/carburants', [CarburantController::class, 'store'])->name('carburants.store');
Route::get('/carburants/{carburant}', [CarburantController::class, 'show'])->name('carburants.show');
Route::get('/carburants/{carburant}/edit', [CarburantController::class, 'edit'])->name('carburants.edit');
Route::put('/carburants/{carburant}', [CarburantController::class, 'update'])->name('carburants.update');
Route::delete('/carburants/{carburant}', [CarburantController::class, 'destroy'])->name('carburants.destroy');
