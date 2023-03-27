<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.base') 
@section('content')
    <h1>{{$product->nom_produit}}</h1>
    <h2>qts : {{$product->qts}}</h2>
    <h3>ref : {{$product->num_produit}}</h3>
    <h4>img : {{$product->img}}</h4>

    <form action="{{route('updateproduct', $product->id)}}" method="POST">
        
        <p>Nom produit :</p>
        <input type="text" name='nom_produit' placeholder="Nom" value="{{$product->nom_produit}}"><br>
        <p>Qts :</p>
        <input type="text " name='qts' placeholder="QTS" value="{{$product->qts}}">
        <br><br>
        <p>numéro produit :</p>
        <input type="text " name='num_produit' placeholder="num" value="{{$product->num_produit}}">
        <br><br>
        <p>img :</p>
        <input type="text " name='img' placeholder="img" value="{{$product->img}}">
        <br><br>
        @csrf
        <button type="submit">Save</button>
    </form>
    @endsection
</body>
</html>