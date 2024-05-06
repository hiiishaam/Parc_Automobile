<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Véhicule</title>
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-6 mx-auto">
                <?php if($vehicule): ?>
                    <h1>Détails du Véhicule</h1>
                    <p><strong>Matricule:</strong> <?php echo e($vehicule->matricule); ?></p>
                    <p><strong>Nom:</strong> <?php echo e($vehicule->nom); ?></p>
                    <p><strong>Modèle:</strong> <?php echo e($vehicule->model); ?></p>
                    <p><strong>Fabriqué par:</strong> <?php echo e($vehicule->fabriquePar); ?></p>
                    <p><strong>Date d'expiration:</strong> <?php echo e($vehicule->dateExp); ?></p>
                    <p><strong>État:</strong> <?php echo e($vehicule->etat); ?></p>
                    <p><strong>Kilométrage:</strong> <?php echo e($vehicule->kilometrage); ?></p>
                    <p><strong>ID Type de Véhicule:</strong> <?php echo e($vehicule->idTypeVehicule); ?></p>
                    <p><strong>ID Service:</strong> <?php echo e($vehicule->idService); ?></p>
                    <!-- Ajoutez d'autres détails du véhicule selon vos besoins -->
                <?php else: ?>
                    <h1>Véhicule non trouvé</h1>
                    <p>Le véhicule que vous recherchez n'a pas été trouvé.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Vehicule/show.blade.php ENDPATH**/ ?>