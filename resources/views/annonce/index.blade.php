<!-- resources/views/annonces/index.blade.php -->
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
@isset($succes)
<div class="alert alert succes">{{$succes}}</div> 
@endisset
    <div class="container">
        <h1>Liste des annonces</h1>
        <a href="{{ route('annonce.create') }}" class="btn btn-primary mb-3">Ajouter une annonce</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>type</th>
                    <th>ville</th>
                    <th>superficie </th>
                    <th>neuf </th>
                    <th>prix</th>
                    <th>created at</th>
                    <th>updated at</th>
                </tr>
            </thead>
      
            <tbody>
                @foreach ($annonces as $annonce)
                    <tr>
                        <td>{{ $annonce->id }}</td>
                        <td>{{ $annonce->titre }}</td>
                        <td>{{ $annonce->description }}</td>
                        <td>{{ $annonce->type }}</td>
                        <td>{{ $annonce->ville }}</td>
                        <td>{{ $annonce->superficie }}</td>
                        @if (($annonce->neuf ==0))
                        <td>TRUE</td>
                        @else
                        <td>FALSE</td>
                        @endif
                        <td>{{ $annonce->prix }}</td>
                        <td>{{ $annonce->created_at }}</td>
                        <td>{{ $annonce->updated_at }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('annonce.show', $annonce->id) }}" class="btn btn-sm btn-secondary mr-1">Afficher</a>
                                <a href="{{ route("annonce.edit", $annonce->id) }}" class="btn btn-sm btn-primary mr-1">Modifier</a>
                                <form action="{{ route('annonce.destroy', $annonce->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                </form>
                            </div>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
