<php

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div>
 @if ($utilisateur)
<h1>Détails de l'utilisateur</h1>
<p><strong>Nom:</strong> {{ $utilisateur->nomComplete }}</p>
<p><strong>Prénom:</strong> {{ $utilisateur->photo }}</p>
 <p><strong>Email:</strong> {{ $utilisateur->email }}</p>
 <!-- Ajoutez d'autres détails de l'utilisateur selon vos besoins -->
@else
 <h1>Utilisateur non trouvé</h1>
 <p>L'utilisateur que vous recherchez n'a pas été trouvé.</p>
 @endif
</div>