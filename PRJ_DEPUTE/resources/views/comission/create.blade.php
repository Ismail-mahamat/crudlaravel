<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ajouter une Commission</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/">Commissions</a>
        </div>
    </nav>

    <div class="container mt-5">
    @if (Session::has('success'))
        <div class="col-md-10 mt-4">
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>  
     @endif         


        <h2 class="text-center mb-4">Ajouter une Commission</h2>

        <form enctype="multipart/form-data" method="post" action="{{ route('comission.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nomc" class="form-label">Nom de la Commission</label>
                <input type="text" class="form-control" id="nomc" name="nomc" required>
            </div>

            <div class="mb-3">
                <label for="budget" class="form-label">Budget</label>
                <input type="number" class="form-control" id="budget" name="budget" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary me-2">Soumettre</button>
                <a href="{{ route('comission.index') }}" class="btn btn-danger">Annuler</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>