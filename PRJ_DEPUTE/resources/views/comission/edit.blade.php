<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier Commission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Commission</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Modifier</h3>
                    </div>
                    <form action="{{ route('comission.update', $comission->id) }}" method="post" class="bg-white rounded shadow-5-strong p-5"> 
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label for="nomc" class="form-label">Nom de la Commission</label>
                            <input type="text" class="form-control" id="nomc" value="{{ $comission->nomc }}" name="nomc" placeholder="Nom de la commission" required />
                        </div>
                        
                        <div class="mb-4">
                            <label for="budget" class="form-label">Budget</label>
                            <input type="text" class="form-control" id="budget" value="{{ $comission->budget }}" name="budget" placeholder="Budget" required />
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                            <a href="{{ route('comission.index') }}" class="btn btn-danger">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>