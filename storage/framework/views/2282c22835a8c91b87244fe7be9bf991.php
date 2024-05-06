<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">

<div class="row pt-4">
    <div class="col-6">
        <h1>Edit Service</h1>
    </div>

    <form action="<?php echo e(route('services.update', $service->id)); ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="nomService">Nom du service:</label>
            <input type="text" class="form-control" name="nomService" id="nomService" placeholder="Nom du service" value="<?php echo e($service->nomService); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Service/edit.blade.php ENDPATH**/ ?>