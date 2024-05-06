<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Types de Véhicules</title>
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="container p-3">
        <div class="row pt-4">
            <div class="col-6">
                <h1>Liste des Types de Véhicules</h1>
            </div>
            <div class="col-6 text-end">
                <a href="<?php echo e(route('typesVehicules.create')); ?>" class="btn btn-primary">
                    <i class="bi bi-plus"></i> &nbsp; Ajouter un Nouveau Type de Véhicule
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Type de Véhicule</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $typesVehicules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeVehicule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table-active">
                        <th scope="row"><?php echo e($typeVehicule->id); ?></th>
                        <td><?php echo e($typeVehicule->typeVehicule); ?></td>
                        <td>
                            <a href="<?php echo e(route('typesVehicules.edit', ['typeVehicule' => $typeVehicule])); ?>" class="btn btn-primary">Modifier</a>
                            <form action="<?php echo e(route('typesVehicules.destroy', ['typeVehicule' => $typeVehicule])); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce type de véhicule ?')">Supprimer</button>
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
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/TypeVehicule/index.blade.php ENDPATH**/ ?>