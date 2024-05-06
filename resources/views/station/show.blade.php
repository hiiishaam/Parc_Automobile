<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<div>
    @if ($station)
        <h1>Détails de la station</h1>
        <p><strong>Nom de la station:</strong> {{ $station->nomStation }}</p>
        <!-- Ajoutez d'autres détails de la station selon vos besoins -->
    @else
        <h1>Station non trouvée</h1>
        <p>La station que vous recherchez n'a pas été trouvée.</p>
    @endif
</div>
