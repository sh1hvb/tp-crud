<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>
    modification
  </h2>
  {{-- <th>ID</th>
  <th>Titre</th>
  <th>Description</th>
  <th>type</th>
  <th>ville</th>
  <th>superficie </th>
  <th>neuf </th>
  <th>prix</th>
  <th>created at</th>
  <th>updated at</th> --}}
  <form action="{{  route('annonce.update', $annonce->id)}}" method="post">
    @csrf
    @method("PUT")
  titre:
  <input type="text" name="titre" value="{{$annonce->titre}}" />
  description:
  <input type="text" name="description" value="{{$annonce->description}}" />
  type:
  neuf:<input type="radio" name="neuf" value="1" @if($annonce->neuf=0) checked @endif />
  ancien:<input type="radio" name="neuf" value="0" @if($annonce->neuf=1) checked @endif/>
  ville:
  <input type="text" name="ville" value="{{$annonce->ville}}" />
  
  superficie:<input type="text" name="superficie" value="{{$annonce->superficie}}" />
  
  type:
  <select name="type">
    <option value="Maison">Maison</option>
    <option value="villa">villa</option>
  </select>
  price:<input type="text" name="prix" value="{{$annonce->prix}}" />
  <input type="submit" value="modifier">
</form>
</html>
</body>