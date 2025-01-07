<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ajouter un Député</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/">Députés</a>
        </div>
    </nav>

    <div class="container mt-5">
    @if (Session::has('success'))
        <div class="col-md-10 mt-4">
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>       @endif         


        <h2 class="text-center mb-4">Ajouter un Député</h2>

        <form enctype="multipart/form-data" method="post" action="{{ route('depute.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="naissance" class="form-label">Date de Naissance</label>
                <input type="date" class="form-control" id="naissance" name="naissance" required>
            </div>
            <div class="mb-3">
                <label for="sexe" class="form-label">Sexe</label>
                <select class="form-control" id="sexe" name="sexe" required>
                    <option value="" disabled selected>Choisir...</option>
                    <option value="M">Homme</option>
                    <option value="F">Femme</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="lieu" class="form-label">Lieu</label>
                <input type="text" class="form-control" id="lieu" name="lieu" required>
            </div>
            <div class="mb-3">
                <label for="salaire" class="form-label">Salaire</label>
                <input type="number" class="form-control" id="salaire" name="salaire" required>
            </div>
            <div class="mb-3">
                <label for="prime" class="form-label">Prime</label>
                <input type="number" class="form-control" id="prime" name="prime" required>
            </div>
            <div class="mb-3">
                <label for="comission_id" class="form-label">Commission</label>
                <select class="form-control" id="comission_id" name="comission_id" required>
                    <option value="" disabled selected>Selectionner votre commission</option>
                    @foreach($comissions as $comission)
                    <option value="{{ $comission->id }}">{{ $comission->nomc }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary me-2">Soumettre</button>
                <a href="{{ route('depute.index') }}" class="btn btn-danger">Annuler</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>