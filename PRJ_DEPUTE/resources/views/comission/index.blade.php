<x-app-layout>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gestion des Commissions</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="{{ route('comission.index') }}">Commissions</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('comission.create') }}">Ajouter Commission</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h2 class="text-center mb-4">Liste des Commissions</h2>
    
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom de la Commission</th>
                        <th>Budget</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @if ($comissions->isNotEmpty())
                    @foreach ($comissions as $comission)
                        <tr>
                            <td>{{ $comission->id }}</td>
                            <td>{{ $comission->nomc }}</td>
                            <td>{{ $comission->budget }} F</td>
                            <td>
                                <a href="{{ route('comission.edit', $comission->id) }}" class="btn btn-dark btn-sm">Modifier</a>
                                <form action="{{ route('comission.destroy', $comission->id) }}" method="post" class="d-inline">
                                    @csrf 
                                    @method('DELETE')
                                    <button class='btn btn-danger btn-sm' type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">Aucune Commission trouvée.</td>
                    </tr>
                @endif
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