<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<div class="container p-3">
    <div class="row pt-4">
        <div class="col-6">
            <h1>Liste des services</h1>
        </div>
        <div class="col-6 text-end">
            <a href="<?php echo e(route('services.create')); ?>" class="btn btn-primary">
                <i class="bi bi-plus"></i> &nbsp; Ajouter un nouveau service
            </a>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom du service</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="table-active">
                    <th scope="row"><?php echo e($service->id); ?></th>
                    <td><?php echo e($service->nomService); ?></td>
                    <td>
                        <a href="<?php echo e(route('services.edit', ['service' => $service])); ?>" class="btn btn-primary">Éditer</a>
                        <form action="<?php echo e(route('services.destroy', ['service' => $service])); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce service ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Service/index.blade.php ENDPATH**/ ?>