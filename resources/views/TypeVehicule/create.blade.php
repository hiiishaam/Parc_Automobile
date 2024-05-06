<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Type de Véhicule</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Ajouter un Type de Véhicule</h1>
    <form action="{{ route('typesVehicules.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="typeVehicule">Type de Véhicule:</label>
            <input type="text" class="form-control" name="typeVehicule" id="typeVehicule" placeholder="Type de Véhicule">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</body>
</html>
