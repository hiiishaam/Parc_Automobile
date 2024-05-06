<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<div class="row pt-4">
    <div class="col-6">
        <h1>Modifier un chauffeur</h1>
    </div>
</div>

<form action="{{ route('chauffeurs.update', $chauffeur->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="cnie">CNI:</label>
    <input type="text" class="form-control" name="cnie" id="cnie" placeholder="CNI" value="{{ $chauffeur->cnie }}">
  </div>
  <div class="form-group">
    <label for="nomChauffeur">Nom:</label>
    <input type="text" class="form-control" name="nomChauffeur" id="nomChauffeur" placeholder="Nom" value="{{ $chauffeur->nomChauffeur }}">
  </div>
  <div class="form-group">
    <label for="prenomChauffeur">Prénom:</label>
    <input type="text" class="form-control" name="prenomChauffeur" id="prenomChauffeur" placeholder="Prénom" value="{{ $chauffeur->prenomChauffeur }}">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse:</label>
    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse" value="{{ $chauffeur->adresse }}">
  </div>
  <div class="form-group">
    <label for="dateNaissance">Date de Naissance:</label>
    <input type="date" class="form-control" name="dateNaissance" id="dateNaissance" value="{{ $chauffeur->dateNaissance }}">
  </div>
  <div class="form-group">
    <label for="dateEntrer">Date d'Entrée:</label>
    <input type="date" class="form-control" name="dateEntrer" id="dateEntrer" value="{{ $chauffeur->dateEntrer }}">
  </div>
  <div class="form-group">
    <label for="tel">Téléphone:</label>
    <input type="tel" class="form-control" name="tel" id="tel" placeholder="Téléphone" value="{{ $chauffeur->tel }}">
  </div>
  <div class="form-group">
    <label for="numPermis">Numéro de Permis:</label>
    <input type="text" class="form-control" name="numPermis" id="numPermis" placeholder="Numéro de Permis" value="{{ $chauffeur->numPermis }}">
  </div>
  <div class="form-group">
    <label for="dateExpPermis">Date d'Expiration du Permis:</label>
    <input type="date" class="form-control" name="dateExpPermis" id="dateExpPermis" value="{{ $chauffeur->dateExpPermis }}">
  </div>
  <div class="form-group">
    <label for="totalExperience">Expérience totale:</label>
    <input type="number" class="form-control" name="totalExperience" id="totalExperience" placeholder="Expérience totale" value="{{ $chauffeur->totalExperience }}">
  </div>
  <div class="form-group">
    <label for="photo">Photo:</label>
    <input type="file" class="form-control-file" name="photo" id="photo">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
