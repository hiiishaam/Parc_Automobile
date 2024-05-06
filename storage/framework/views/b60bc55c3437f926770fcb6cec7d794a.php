<!-- <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">

<form action="<?php echo e(route('utilisateurs.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="nomComplete" placeholder="Nom complet"><br>
    <input type="email" name="email" placeholder="Adresse email"><br>
    <input type="text" name="login" placeholder="Nom d'utilisateur"><br>
    <input type="password" name="password" placeholder="Mot de passe"><br>
    <input type="file" name="photo" placeholder="Photo"><br>

    <button type="submit">Enregistrer</button>
</form> -->

<br><br>

<h1>Ajouter un Utilisateur </h1>
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<form action="<?php echo e(route('utilisateurs.store')); ?>" method="POST" >
  <?php echo csrf_field(); ?>
  <div class="form-group" >  <label for="nomComplete">Nom complet:</label>
    <input type="text" class="form-control" name="nomComplete" id="nomComplete" placeholder="Nom complet">
  </div>
  <div class="form-group">
    <label for="email">Adresse email:</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Adresse email">
  </div>
  <div class="form-group">
    <label for="login">Nom d'utilisateur:</label>
    <input type="text" class="form-control" name="login" id="login" placeholder="Nom d'utilisateur">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe:</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
  </div>
  <div class="form-group">
    <label for="photo">Photo:</label>
    <input type="file" class="form-control-file" name="photo" id="photo" placeholder="Photo">
  </div>

  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>





<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Utilisateurs/create.blade.php ENDPATH**/ ?>