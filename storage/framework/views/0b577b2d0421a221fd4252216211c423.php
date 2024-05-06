<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Véhicule</title>
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col-6">
                <h1>Modifier un Véhicule</h1>
            </div>
        </div>
        <form action="<?php echo e(route('vehicules.update', $vehicule->id)); ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="matricule">Matricule:</label>
                <input type="text" class="form-control" name="matricule" id="matricule" placeholder="Matricule" value="<?php echo e($vehicule->matricule); ?>">
            </div>
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?php echo e($vehicule->nom); ?>">
            </div>
            <div class="form-group">
                <label for="model">Modèle:</label>
                <input type="text" class="form-control" name="model" id="model" placeholder="Modèle" value="<?php echo e($vehicule->model); ?>">
            </div>
            <div class="form-group">
                <label for="fabriquePar">Fabriqué par:</label>
                <input type="text" class="form-control" name="fabriquePar" id="fabriquePar" placeholder="Fabriqué par" value="<?php echo e($vehicule->fabriquePar); ?>">
            </div>
            <div class="form-group">
                <label for="dateExp">Date d'expiration:</label>
                <input type="date" class="form-control" name="dateExp" id="dateExp" value="<?php echo e($vehicule->dateExp); ?>">
            </div>
            <div class="form-group">
                <label for="etat">État:</label>
                <input type="text" class="form-control" name="etat" id="etat" placeholder="État" value="<?php echo e($vehicule->etat); ?>">
            </div>
            <div class="form-group">
                <label for="kilometrage">Kilométrage:</label>
                <input type="number" class="form-control" name="kilometrage" id="kilometrage" placeholder="Kilométrage" value="<?php echo e($vehicule->kilometrage); ?>">
            </div>
            <div class="form-group">
                <label for="idTypeVehicule">ID Type de Véhicule:</label>
                <input type="number" class="form-control" name="idTypeVehicule" id="idTypeVehicule" placeholder="ID Type de Véhicule" value="<?php echo e($vehicule->idTypeVehicule); ?>">
            </div>
            <div class="form-group">
                <label for="idService">ID Service:</label>
                <input type="number" class="form-control" name="idService" id="idService" placeholder="ID Service" value="<?php echo e($vehicule->idService); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Vehicule/edit.blade.php ENDPATH**/ ?>