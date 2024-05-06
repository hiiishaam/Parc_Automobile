<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Carburant</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Ajouter un Carburant</h1>
    <form action="{{ route('carburants.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="dateCarburant">Date du carburant:</label>
            <input type="date" class="form-control" name="dateCarburant" id="dateCarburant">
        </div>
        <div class="form-group">
            <label for="typeCarburant">Type de carburant:</label>
            <input type="text" class="form-control" name="typeCarburant" id="typeCarburant">
        </div>
        <div class="form-group">
            <label for="qte">Quantité de carburant:</label>
            <input type="number" class="form-control" name="qte" id="qte">
        </div>
        <div class="form-group">
            <label for="prixCarburant">Prix du carburant:</label>
            <input type="text" class="form-control" name="prixCarburant" id="prixCarburant">
        </div>
        <div class="form-group">
            <label for="kilometrage">Kilométrage:</label>
            <input type="number" class="form-control" name="kilometrage" id="kilometrage">
        </div>
        <div class="form-group">
            <label for="idVehicule">Véhicule:</label>
            <select class="form-control" name="idVehicule" id="idVehicule">
                @foreach ($vehicules as $vehicule)
                    <option value="{{ $vehicule->id }}">{{ $vehicule->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="idChauffeur">Chauffeur:</label>
            <select class="form-control" name="idChauffeur" id="idChauffeur">
                @foreach ($chauffeurs as $chauffeur)
                    <option value="{{ $chauffeur->id }}">{{ $chauffeur->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="idStation">Station:</label>
            <select class="form-control" name="idStation" id="idStation">
                @foreach ($stations as $station)
                    <option value="{{ $station->id }}">{{ $station->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</body>
</html>
