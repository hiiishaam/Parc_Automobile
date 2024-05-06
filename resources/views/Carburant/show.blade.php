<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du carburant</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> <!-- Utilisation de bootstrap.min.css -->
</head>
<body>
    <div>
        @if ($carburant)
            <h1>Détails du carburant</h1>
            <p><strong>Date du carburant:</strong> {{ $carburant->dateCarburant }}</p>
            <p><strong>Type de carburant:</strong> {{ $carburant->typeCarburant }}</p>
            <p><strong>Quantité:</strong> {{ $carburant->qte }}</p>
            <p><strong>Prix:</strong> {{ $carburant->prixCarburant }}</p>
            <p><strong>Kilométrage:</strong> {{ $carburant->kilometrage }}</p>
            <p><strong>Véhicule:</strong> {{ $carburant->vehicule->nom }}</p>
            <p><strong>Chauffeur:</strong> {{ $carburant->chauffeur->nom }}</p>
            <p><strong>Station:</strong> {{ $carburant->station->nom }}</p>
            <!-- Ajoutez d'autres détails du carburant selon vos besoins -->
        @else
            <h1>Carburant non trouvé</h1>
            <p>Le carburant que vous recherchez n'a pas été trouvé.</p>
        @endif
    </div>
</body>
</html>
