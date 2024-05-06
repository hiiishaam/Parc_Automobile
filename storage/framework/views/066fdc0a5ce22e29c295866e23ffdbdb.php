<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">

 <!-- <form action="<?php echo e(route('utilisateurs.update', $utilisateur->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <input type="text" name="nom" value="<?php echo e($utilisateur->nom); ?>"><br>
    <input type="text" name="prenom" value="<?php echo e($utilisateur->prenom); ?>"><br>
    <button type="submit">Enregistrer les modifications</button>
</form> -->

<div class="row pt-4">
    <div class="col-6">
        <h1>Edit utilisateurs</h1>
    </div>

<form action="<?php echo e(route('utilisateurs.update', $utilisateur->id)); ?>" method="POST" class="form-horizontal">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  <div class="form-group">
            <label for="nomComplete">Nom complet:</label>
            <input type="text" class="form-control" name="nomComplete" id="nomComplete" placeholder="Nom complet" value="<?php echo e($utilisateur->nomComplete); ?>">
        </div>
        <div class="form-group">
            <label for="email">Adresse email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Adresse email" value="<?php echo e($utilisateur->email); ?>">
        </div>
        <div class="form-group">
            <label for="login">Nom d'utilisateur:</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Nom d'utilisateur" value="<?php echo e($utilisateur->login); ?>">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
        </div>
        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="file" class="form-control-file" name="photo" id="photo" placeholder="Photo">
        </div>
  <button type="submit" class="btn btn-primary">edit</button>
</form>
</div><?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/edit.blade.php ENDPATH**/ ?>