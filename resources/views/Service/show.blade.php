<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div>
    @if ($service)
        <h1>Détails du service</h1>
        <p><strong>Nom du service:</strong> {{ $service->nomService }}</p>
        <!-- Ajoutez d'autres détails du service selon vos besoins -->
    @else
        <h1>Service non trouvé</h1>
        <p>Le service que vous recherchez n'a pas été trouvé.</p>
    @endif
</div>
