<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des carburants</title>
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container p-3">
        <div class="row pt-4">
            <div class="col-6">
                <h1>Liste des carburants</h1>
            </div>
            <div class="col-6 text-end">
                <a href="<?php echo e(route('carburants.create')); ?>" class="btn btn-primary">
                    <i class="bi bi-plus"></i> &nbsp; Ajouter un nouveau carburant
                </a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Date du carburant</th>
                        <th scope="col">Type de carburant</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Kilométrage</th>
                        <th scope="col">Véhicule</th>
                        <th scope="col">Chauffeur</th>
                        <th scope="col">Station</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $carburants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carburant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table-active">
                        <th scope="row"><?php echo e($carburant->id); ?></th>
                        <td><?php echo e($carburant->dateCarburant); ?></td>
                        <td><?php echo e($carburant->typeCarburant); ?></td>
                        <td><?php echo e($carburant->qte); ?></td>
                        <td><?php echo e($carburant->prixCarburant); ?></td>
                        <td><?php echo e($carburant->kilometrage); ?></td>
                        <td><?php echo e($carburant->vehicule->nom); ?></td>
                        <td><?php echo e($carburant->chauffeur->nom); ?></td>
                        <td><?php echo e($carburant->station->nom); ?></td>
                        <td>
                            <a href="<?php echo e(route('carburants.edit', ['carburant' => $carburant])); ?>" class="btn btn-primary">Éditer</a>
                            <form action="<?php echo e(route('carburants.destroy', ['carburant' => $carburant])); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce carburant ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Carburant/index.blade.php ENDPATH**/ ?>