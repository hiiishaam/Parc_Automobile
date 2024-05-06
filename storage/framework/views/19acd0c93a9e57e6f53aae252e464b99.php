
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<div class="container p-3">
<div class="row pt-4">
    <div class="col-6">
        <h1>Liste des utilisateurs</h1>
    </div>
    <div class="col-6 text-end">
    <a href="<?php echo e(route('utilisateurs.create')); ?>" class="btn btn-primary">
        <i class="bi bi-plus"></i> &nbsp; Ajout Nouveau utilisateurs
    </a>
</div>

    <div class="card-body">

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom complet</th>
      <th scope="col">Email</th>
      <th scope="col">aaaa</th>
    </tr>
  </thead>
  <tbody>
 
        <?php $__currentLoopData = $utilisateurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utilisateur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
    <tr class="table-active">
      <th scope="row"><?php echo e($utilisateur->id); ?></th>
      <td><?php echo e($utilisateur->nomComplete); ?></td>
      <td><?php echo e($utilisateur->email); ?></td>
      <td> <a href="<?php echo e(route('utilisateurs.edit', ['utilisateur' => $utilisateur])); ?>" class="btn btn-primary">edit</a>
      <form action="<?php echo e(route('utilisateurs.destroy', ['utilisateur' => $utilisateur])); ?>" method="POST" style="display: inline;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Delete</button>
    </form>
    </td>
    </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>
</div>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/index.blade.php ENDPATH**/ ?>