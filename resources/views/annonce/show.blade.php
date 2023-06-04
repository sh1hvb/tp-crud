<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <h2> Détails</h2>
        <div class="form-group">
            <strong>id</strong>
            {{ $annonce->id }}
        </div>
        <div class="form-group">
           <strong>titre :</strong>
           {{ $annonce->titre }}
        </div>
        <div class="form-group">
            <strong>description :</strong>
            {{ $annonce->description}}
        </div>
        <div class="form-group">
            <strong>type :</strong>
            {{ $annonce->type}}
        </div>
        <div class="form-group">
            <strong>Note :</strong>
            {{ $annonce->ville }}
        </div>
        <div class="form-group">
            <strong>Groupe :</strong>
            {{ $annonce->neuf }}
        </div>
        <div class="form-group">
            <strong>Groupe :</strong>
            {{ $annonce->prix }}
        </div>
        <div class="form-group">
            <strong>Création :</strong>
            {{ $annonce->created_at }}
        </div>
        <div class="form-group">
            <strong>Dernière modification :</strong>
            {{ $annonce->updated_at }}
        </div>
       </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>