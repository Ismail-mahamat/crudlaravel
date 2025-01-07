<x-app-layout>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gestion des Députés</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Députés</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('depute.create') }}">Ajouter Député</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container my-4">
    <h2 class="text-center mb-4">Liste des Députés</h2>
    
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Sexe</th>
                        <th>Lieu</th>
                        <th>Salaire</th>
                        <th>Prime</th>
                        <th>ID Commission</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($deputes as $depute) 
                    <tr>
                        <td>{{ $depute->id }}</td>
                        <td>{{ $depute->nom }}</td>
                        <td>{{ $depute->prenom }}</td>
                        <td>{{ $depute->naissance }}</td>
                        <td>{{ $depute->sexe }}</td>
                        <td>{{ $depute->lieu }}</td>
                        <td>{{ $depute->salaire }} F</td>
                        <td>{{ $depute->prime }} F</td>
                        <td>{{ $depute->comission_id }}</td>
                        <td>
                            <a href="{{ route('depute.edit', $depute->id) }}" class="btn btn-dark btn-sm">Modifier</a>
                            <form action="{{ route('depute.destroy', $depute->id) }}" method="post" class="d-inline">
                                @csrf 
                                @method('DELETE')
                                <button class='btn btn-danger btn-sm' type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">Aucun député trouvé.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
</x-app-layout>