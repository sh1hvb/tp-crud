<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Ajouter une nouvelle propriété</h1>
                    <form action="{{ route('annonce.store') }}" method="POST">
                        @csrf
                       @error('titre')
                       <div class="alert alert-danger">{{$message}}</div>
                       @enderror
                        <div class="form-group">
                            <label for="titre">Titre :</label>
                            <input type="text" class="form-control" id="titre" name="titre" required>
                        </div>
                        @csrf
                        @error('description')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <label for="description">Description :</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="type">Type :</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="">Sélectionnez un type</option>
                                <option value="appartement">Appartement</option>
                                <option value="villa">Maison</option>
                                <option value="terrain">Terrain</option>
                                <option value="maison">Terrain</option>
                                <option value="magasin">Terrain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ville">Ville :</label>
                            <input type="text" class="form-control" id="ville" name="ville" required>
                        </div>
                        <div class="form-group">
                            <label for="superficie">Superficie :</label>
                            <input type="number" class="form-control" id="superficie" name="superficie" required>
                        </div>
                        <div class="form-group">
                            <label for="neuf">Neuf :</label>
                           <input type="radio" name="neuf" id="neuf"value='1'>
                           <input type="radio" name="neuf" id="ancien"value='0'>
                        </div>
                        <div class="form-group">
                            <label for="prix">Prix :</label>
                            <input type="number" class="form-control" id="prix" name="prix" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>