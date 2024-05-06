<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Type de Véhicule</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col-6">
                <h1>Modifier un Type de Véhicule</h1>
            </div>
        </div>
        <form action="{{ route('typesVehicules.update', $typeVehicule->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="typeVehicule">Type de Véhicule:</label>
                <input type="text" class="form-control" name="typeVehicule" id="typeVehicule" placeholder="Type de Véhicule" value="{{ $typeVehicule->typeVehicule }}">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
</html>
