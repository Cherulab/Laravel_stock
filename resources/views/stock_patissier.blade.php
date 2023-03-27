<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock/Patissier</title>
</head>
<body>

@extends('layouts.base') 
@section('content')

<h1>Stock/Patissier</h1>
    
    {{-- Table des produits --}}
        <table class="m-t-mt ">
            <th>Numéro</th>
            <th>Produits</th>
            <th>Quantités</th>
            @foreach ($data as $datas)
            <tr>
                <td>{{$datas["num_produit"]}}</td>
            <td>{{$datas['nom_produit']}}</td>
            <td>x {{$datas['qts']}}</td>
            <td><img src="{{$datas['img']}}" alt=""></td>
            {{-- modif product --}}
            <td><button><a href="{{route('viewproduct', $datas->id)}}">Modifier</a></button></td>
            <td><a class="supp_button" href="{{route('deletedproduct', $datas->id)}}">Supprimer</a> </td>
            
            </tr>
            @endforeach    
        </table>
        {{-- ADD PRODUCT --}}
      <h1>AJOUT PRODUIT</h1>
        <form action="{{route('addproduct')}}" method="POST">
            
            <p>Nom produit :</p>
            <input type="text" name='nom_produit' placeholder="Nom" value=""><br>
            <p>Qts :</p>
            <input type="text " name='qts' placeholder="QTS" value="">
            <br><br>
            <p>numéro produit :</p>
            <input type="text " name='num_produit' placeholder="num" value="">
            <br><br>
            <p>img :</p>
            <input type="text " name='img' placeholder="img" value="">
            <br><br>
            @csrf
            <button type="submit">ADD</button>
        </form>
   
@endsection
</body>
</html>
