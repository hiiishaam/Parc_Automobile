<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<div class="row pt-4">
    <div class="col-6">
        <h1>Edit Station</h1>
    </div>

    <form action="{{ route('stations.update', $station->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nomStation">Nom de la station:</label>
            <input type="text" class="form-control" name="nomStation" id="nomStation" placeholder="Nom de la station" value="{{ $station->nomStation }}">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>
