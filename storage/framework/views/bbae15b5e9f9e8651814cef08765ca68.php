<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<div>
    <?php if($chauffeur): ?>
        <h1>Détails du chauffeur</h1>
        <p><strong>Nom:</strong> <?php echo e($chauffeur->nomChauffeur); ?></p>
        <p><strong>Prénom:</strong> <?php echo e($chauffeur->prenomChauffeur); ?></p>
        <p><strong>CNI:</strong> <?php echo e($chauffeur->cnie); ?></p>
        <p><strong>Adresse:</strong> <?php echo e($chauffeur->adresse); ?></p>
        <p><strong>Date de Naissance:</strong> <?php echo e($chauffeur->dateNaissance); ?></p>
        <p><strong>Date d'Entrée:</strong> <?php echo e($chauffeur->dateEntrer); ?></p>
        <p><strong>Téléphone:</strong> <?php echo e($chauffeur->tel); ?></p>
        <p><strong>Numéro de Permis:</strong> <?php echo e($chauffeur->numPermis); ?></p>
        <p><strong>Date d'Expiration du Permis:</strong> <?php echo e($chauffeur->dateExpPermis); ?></p>
        <p><strong>Expérience totale:</strong> <?php echo e($chauffeur->totalExperience); ?></p>
        <!-- Ajoutez d'autres détails du chauffeur selon vos besoins -->
    <?php else: ?>
        <h1>Chauffeur non trouvé</h1>
        <p>Le chauffeur que vous recherchez n'a pas été trouvé.</p>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Chauffeur/show.blade.php ENDPATH**/ ?>