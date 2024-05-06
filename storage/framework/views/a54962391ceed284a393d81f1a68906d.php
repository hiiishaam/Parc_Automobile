<br><br>
<h1>Ajouter un Service </h1>
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<form action="<?php echo e(route('services.store')); ?>" method="POST" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="nomService">Nom du service:</label>
    <input type="text" class="form-control" name="nomService" id="nomService" placeholder="Nom du service">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Service/create.blade.php ENDPATH**/ ?>