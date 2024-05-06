
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<div class="container p-3">
<div class="row pt-4">
    <div class="col-6">
        <h1>Liste des utilisateurs</h1>
    </div>
    <div class="col-6 text-end">
    <a href="{{ route('utilisateurs.create') }}" class="btn btn-primary">
        <i class="bi bi-plus"></i> &nbsp; Ajout Nouveau utilisateurs
    </a>
</div>

    <div class="card-body">

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom complet</th>
      <th scope="col">Email</th>
      <th scope="col">aaaa</th>
    </tr>
  </thead>
  <tbody>
 
        @foreach ($utilisateurs as $utilisateur)
                    
    <tr class="table-active">
      <th scope="row">{{ $utilisateur->id }}</th>
      <td>{{ $utilisateur->nomComplete }}</td>
      <td>{{ $utilisateur->email }}</td>
      <td> <a href="{{ route('utilisateurs.edit', ['utilisateur' => $utilisateur]) }}" class="btn btn-primary">edit</a>
      <form action="{{ route('utilisateurs.destroy', ['utilisateur' => $utilisateur]) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Delete</button>
    </form>
    </td>
    </tr>
         @endforeach

  </tbody>
</table>
</div>
