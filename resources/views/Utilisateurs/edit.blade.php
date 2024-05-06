<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

 <!-- <form action="{{ route('utilisateurs.update', $utilisateur->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nom" value="{{ $utilisateur->nom }}"><br>
    <input type="text" name="prenom" value="{{ $utilisateur->prenom }}"><br>
    <button type="submit">Enregistrer les modifications</button>
</form> -->

<div class="row pt-4">
    <div class="col-6">
        <h1>Edit utilisateurs</h1>
    </div>

<form action="{{ route('utilisateurs.update', $utilisateur->id) }}" method="POST" class="form-horizontal">
  @csrf
  @method('PUT')
  <div class="form-group">
            <label for="nomComplete">Nom complet:</label>
            <input type="text" class="form-control" name="nomComplete" id="nomComplete" placeholder="Nom complet" value="{{ $utilisateur->nomComplete }}">
        </div>
        <div class="form-group">
            <label for="email">Adresse email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Adresse email" value="{{ $utilisateur->email }}">
        </div>
        <div class="form-group">
            <label for="login">Nom d'utilisateur:</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Nom d'utilisateur" value="{{ $utilisateur->login }}">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
        </div>
        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="file" class="form-control-file" name="photo" id="photo" placeholder="Photo">
        </div>
  <button type="submit" class="btn btn-primary">edit</button>
</form>
</div>