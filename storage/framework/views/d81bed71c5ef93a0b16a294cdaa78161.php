<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Véhicules</title>
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container p-3">
        <div class="row pt-4">
            <div class="col-6">
                <h1>Liste des Véhicules</h1>
            </div>
            <div class="col-6 text-end">
                <a href="<?php echo e(route('vehicules.create')); ?>" class="btn btn-primary">
                    <i class="bi bi-plus"></i> &nbsp; Ajouter un Nouveau Véhicule
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Matricule</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Model</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $vehicules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table-active">
                        <th scope="row"><?php echo e($vehicule->id); ?></th>
                        <td><?php echo e($vehicule->matricule); ?></td>
                        <td><?php echo e($vehicule->nom); ?></td>
                        <td><?php echo e($vehicule->model); ?></td>
                        <td>
                            <a href="<?php echo e(route('vehicules.edit', ['vehicule' => $vehicule])); ?>" class="btn btn-primary">Modifier</a>
                            <form action="<?php echo e(route('vehicules.destroy', ['vehicule' => $vehicule])); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?')">Supprimer</button>
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
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Vehicule/index.blade.php ENDPATH**/ ?>