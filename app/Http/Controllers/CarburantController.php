<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carburant;
use App\Models\Vehicule; // Ajout du modèle Vehicule
use App\Models\Chauffeur; // Ajout du modèle Chauffeur
use App\Models\Station; // Ajout du modèle Station

class CarburantController extends Controller
{
    public function index()
{
    $carburants = Carburant::all();
    return view('Carburant.index', compact('carburants'));
}


    public function create()
    {
        $vehicules = Vehicule::all(); // Récupération de tous les véhicules
        $chauffeurs = Chauffeur::all(); // Récupération de tous les chauffeurs
        $stations = Station::all(); // Récupération de toutes les stations
      

        return view('Carburant.create', compact('vehicules', 'chauffeurs', 'stations'));
    }

    // Enregistre un nouveau carburant
    public function store(Request $request)
    {
        Carburant::create($request->all()); // Utilisation du modèle Carburant
        return redirect()->route('carburants.index'); // Redirection vers l'index des carburants
    }
    // Affiche les détails d'un carburant spécifique
public function show(Carburant $carburant)
{
    if (!$carburant) {
        abort(404); // Retourne une erreur 404 si le carburant n'est pas trouvé
    }
    return view('Carburant.show', compact('carburant'));
}

// Affiche le formulaire pour modifier un carburant
public function edit(Carburant $carburant)
{
    return view('Carburant.edit', compact('carburant'));
}

// Met à jour un carburant spécifique
public function update(Request $request, Carburant $carburant)
{
    $carburant->update($request->all());
    return redirect()->route('carburants.index');
}

// Supprime un carburant spécifique
public function destroy(Carburant $carburant)
{
    $carburant->delete();
    return redirect()->route('carburants.index');
}

}
