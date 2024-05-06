<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">

<div class="container p-3">
    <div class="row pt-4">
        <div class="col-6">
            <h1>Liste des stations</h1>
        </div>
        <div class="col-6 text-end">
            <a href="<?php echo e(route('stations.create')); ?>" class="btn btn-primary">
                <i class="bi bi-plus"></i> &nbsp; Ajouter une nouvelle station
            </a>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom de la station</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $stations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $station): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="table-active">
                    <th scope="row"><?php echo e($station->id); ?></th>
                    <td><?php echo e($station->nomStation); ?></td>
                    <td>
                        <a href="<?php echo e(route('stations.edit', ['station' => $station])); ?>" class="btn btn-primary">Éditer</a>
                        <form action="<?php echo e(route('stations.destroy', ['station' => $station])); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette station ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Station/index.blade.php ENDPATH**/ ?>