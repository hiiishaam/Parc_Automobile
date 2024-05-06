<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">

<div class="row pt-4">
    <div class="col-6">
        <h1>Edit Station</h1>
    </div>

    <form action="<?php echo e(route('stations.update', $station->id)); ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="nomStation">Nom de la station:</label>
            <input type="text" class="form-control" name="nomStation" id="nomStation" placeholder="Nom de la station" value="<?php echo e($station->nomStation); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Station/edit.blade.php ENDPATH**/ ?>