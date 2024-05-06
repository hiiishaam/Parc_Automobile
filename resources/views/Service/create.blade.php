<br><br>
<h1>Ajouter un Service </h1>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="nomService">Nom du service:</label>
    <input type="text" class="form-control" name="nomService" id="nomService" placeholder="Nom du service">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
