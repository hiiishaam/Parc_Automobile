<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<div class="container p-3">
    <div class="row pt-4">
        <div class="col-6">
            <h1>Liste des chauffeurs</h1>
        </div>
        <div class="col-6 text-end">
            <a href="<?php echo e(route('chauffeurs.create')); ?>" class="btn btn-primary">
                <i class="bi bi-plus"></i> &nbsp; Ajouter un nouveau chauffeur
            </a>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom complet</th>
                    <th scope="col">CNI</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Date de Naissance</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $chauffeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="table-active">
                    <th scope="row"><?php echo e($chauffeur->id); ?></th>
                    <td><?php echo e($chauffeur->nomChauffeur); ?> <?php echo e($chauffeur->prenomChauffeur); ?></td>
                    <td><?php echo e($chauffeur->cnie); ?></td>
                    <td><?php echo e($chauffeur->adresse); ?></td>
                    <td><?php echo e($chauffeur->dateNaissance); ?></td>
                    <td><?php echo e($chauffeur->tel); ?></td>
                    <td>
                        <a href="<?php echo e(route('chauffeurs.edit', ['chauffeur' => $chauffeur])); ?>" class="btn btn-primary">Modifier</a>
                        <form action="<?php echo e(route('chauffeurs.destroy', ['chauffeur' => $chauffeur])); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce chauffeur ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Chauffeur/index.blade.php ENDPATH**/ ?>