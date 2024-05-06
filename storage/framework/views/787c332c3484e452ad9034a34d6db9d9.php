<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Carburant</title>
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
</head>
<body>
    <h1>Ajouter un Carburant</h1>
    <form action="<?php echo e(route('carburants.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
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
                <?php $__currentLoopData = $vehicules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($vehicule->id); ?>"><?php echo e($vehicule->nom); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="idChauffeur">Chauffeur:</label>
            <select class="form-control" name="idChauffeur" id="idChauffeur">
                <?php $__currentLoopData = $chauffeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($chauffeur->id); ?>"><?php echo e($chauffeur->nom); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="idStation">Station:</label>
            <select class="form-control" name="idStation" id="idStation">
                <?php $__currentLoopData = $stations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $station): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($station->id); ?>"><?php echo e($station->nom); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Carburant/create.blade.php ENDPATH**/ ?>