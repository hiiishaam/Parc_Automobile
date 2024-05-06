<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Type de Véhicule</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-6 mx-auto">
                @if ($typeVehicule)
                    <h1>Détails du Type de Véhicule</h1>
                    <p><strong>Type de Véhicule:</strong> {{ $typeVehicule->typeVehicule }}</p>
                    <!-- Ajoutez d'autres détails du type de véhicule selon vos besoins -->
                @else
                    <h1>Type de Véhicule non trouvé</h1>
                    <p>Le type de véhicule que vous recherchez n'a pas été trouvé.</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
