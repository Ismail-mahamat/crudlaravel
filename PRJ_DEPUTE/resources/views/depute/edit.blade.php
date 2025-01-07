<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Édition Député</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center">ÉDITION DÉPUTÉ</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Modifier le Député</h3>
                    </div>
                    <form action="{{ route('depute.update', $depute->id) }}" method="post" class="bg-white rounded shadow-5-strong p-5">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" value="{{ $depute->nom }}" name="nom" placeholder="Nom" required />
                        </div>

                        <div class="mb-4">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" value="{{ $depute->prenom }}" name="prenom" placeholder="Prénom" required />
                        </div>

                        <div class="mb-4">
                            <label for="naissance" class="form-label">Date de Naissance</label>
                            <input type="date" class="form-control" id="naissance" value="{{ $depute->naissance }}" name="naissance" required />
                        </div>

                        <div class="mb-4">
                            <label for="sexe" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="sexe" value="{{ $depute->sexe }}" name="sexe" placeholder="Genre" required />
                        </div>

                        <div class="mb-4">
                            <label for="lieu" class="form-label">Lieu de Naissance</label>
                            <input type="text" class="form-control" id="lieu" value="{{ $depute->lieu }}" name="lieu" placeholder="Lieu de naissance" required />
                        </div>

                        <div class="mb-4">
                            <label for="salaire" class="form-label">Salaire</label>
                            <input type="number" class="form-control" id="salaire" value="{{ $depute->salaire }}" name="salaire" placeholder="Salaire" required />
                        </div>

                        <div class="mb-4">
                            <label for="prime" class="form-label">Prime</label>
                            <input type="text" class="form-control" id="prime" value="{{ $depute->prime }}" name="prime" placeholder="Prime" required />
                        </div>

                        <div class="mb-4">
                            <label for="comission_id" class="form-label">Commission</label>
                            <select class="form-control" id="comission_id" name="comission_id" required>
                                <option value="" disabled selected>Selectionner votre Commission</option>
                                @foreach($comissions as $comission)
                                <option value="{{ $comission->id }}">{{ $comission->nomc }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                            <a href="{{ route('depute.index') }}" class="btn btn-danger">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>