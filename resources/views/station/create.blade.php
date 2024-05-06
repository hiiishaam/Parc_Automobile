<br><br>
<h1>Ajouter une Station</h1>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<form action="{{ route('stations.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="nomStation">Nom de la station:</label>
    <input type="text" class="form-control" name="nomStation" id="nomStation" placeholder="Nom de la station">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
