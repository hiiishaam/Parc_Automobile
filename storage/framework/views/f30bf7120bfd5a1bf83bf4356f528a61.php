<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Véhicule</title>
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
</head>
<body>
    <h1>Ajouter un Véhicule</h1>
    <form action="<?php echo e(route('vehicules.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="matricule">Matricule:</label>
            <input type="text" class="form-control" name="matricule" id="matricule" placeholder="Matricule">
        </div>
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="model">Modèle:</label>
            <input type="text" class="form-control" name="model" id="model" placeholder="Modèle">
        </div>
        <div class="form-group">
            <label for="fabriquePar">Fabriqué par:</label>
            <input type="text" class="form-control" name="fabriquePar" id="fabriquePar" placeholder="Fabriqué par">
        </div>
        <div class="form-group">
            <label for="dateExp">Date d'expiration:</label>
            <input type="date" class="form-control" name="dateExp" id="dateExp">
        </div>
        <div class="form-group">
            <label for="etat">État:</label>
            <input type="text" class="form-control" name="etat" id="etat" placeholder="État">
        </div>
        <div class="form-group">
            <label for="kilometrage">Kilométrage:</label>
            <input type="number" class="form-control" name="kilometrage" id="kilometrage" placeholder="Kilométrage">
        </div>
        <div class="form-group">
            <label for="idTypeVehicule">ID Type de Véhicule:</label>
            <input type="number" class="form-control" name="idTypeVehicule" id="idTypeVehicule" placeholder="ID Type de Véhicule">
        </div>
        <div class="form-group">
            <label for="idService">ID Service:</label>
            <input type="number" class="form-control" name="idService" id="idService" placeholder="ID Service">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Vehicule/create.blade.php ENDPATH**/ ?>