<php

<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<div>
 <?php if($utilisateur): ?>
<h1>Détails de l'utilisateur</h1>
<p><strong>Nom:</strong> <?php echo e($utilisateur->nomComplete); ?></p>
<p><strong>Prénom:</strong> <?php echo e($utilisateur->photo); ?></p>
 <p><strong>Email:</strong> <?php echo e($utilisateur->email); ?></p>
 <!-- Ajoutez d'autres détails de l'utilisateur selon vos besoins -->
<?php else: ?>
 <h1>Utilisateur non trouvé</h1>
 <p>L'utilisateur que vous recherchez n'a pas été trouvé.</p>
 <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\ParcAutomobile\resources\views/Utilisateurs/show.blade.php ENDPATH**/ ?>