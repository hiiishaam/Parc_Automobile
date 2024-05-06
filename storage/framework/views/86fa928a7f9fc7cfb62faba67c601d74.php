<br><br>
<h1>Ajouter une Station</h1>
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<form action="<?php echo e(route('stations.store')); ?>" method="POST" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="nomStation">Nom de la station:</label>
    <input type="text" class="form-control" name="nomStation" id="nomStation" placeholder="Nom de la station">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Station/create.blade.php ENDPATH**/ ?>