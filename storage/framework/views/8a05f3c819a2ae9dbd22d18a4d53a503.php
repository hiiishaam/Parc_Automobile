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

<h1>Ajouter un Chauffeur</h1>
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<form action="<?php echo e(route('chauffeurs.store')); ?>" method="POST" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="cnie">CNI:</label>
    <input type="text" class="form-control" name="cnie" id="cnie" placeholder="CNI">
  </div>
  <div class="form-group">
    <label for="nomChauffeur">Nom:</label>
    <input type="text" class="form-control" name="nomChauffeur" id="nomChauffeur" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="prenomChauffeur">Prénom:</label>
    <input type="text" class="form-control" name="prenomChauffeur" id="prenomChauffeur" placeholder="Prénom">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse:</label>
    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse">
  </div>
  <div class="form-group">
    <label for="dateNaissance">Date de Naissance:</label>
    <input type="date" class="form-control" name="dateNaissance" id="dateNaissance">
  </div>
  <div class="form-group">
    <label for="dateEntrer">Date d'Entrée:</label>
    <input type="date" class="form-control" name="dateEntrer" id="dateEntrer">
  </div>
  <div class="form-group">
    <label for="tel">Téléphone:</label>
    <input type="tel" class="form-control" name="tel" id="tel" placeholder="Téléphone">
  </div>
  <div class="form-group">
    <label for="numPermis">Numéro de Permis:</label>
    <input type="text" class="form-control" name="numPermis" id="numPermis" placeholder="Numéro de Permis">
  </div>
  <div class="form-group">
    <label for="dateExpPermis">Date d'Expiration du Permis:</label>
    <input type="date" class="form-control" name="dateExpPermis" id="dateExpPermis">
  </div>
  <div class="form-group">
    <label for="totalExperience">Expérience totale:</label>
    <input type="number" class="form-control" name="totalExperience" id="totalExperience" placeholder="Expérience totale">
  </div>
  <div class="form-group">
    <label for="photo">Photo:</label>
    <input type="file" class="form-control-file" name="photo" id="photo">
  </div>

  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Chauffeur/create.blade.php ENDPATH**/ ?>