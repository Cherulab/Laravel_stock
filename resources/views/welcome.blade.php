<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Home</title>
</head>
<body>
@extends('layouts.base') 

@section('content')
    <form action="{{route('addcommande')}}" method="POST">
        <div class="banner">
          <h1>Prise de Commande</h1>
        </div>
        <div class="item">
          <p>Nom</p>
          <div class="name-item">
            <input type="text" name="client_name" placeholder="Nom" />
          </div>
        </div>
        <div class="item">
          <p>Numéro</p>
          <input type="text" name="client_phone" placeholder="### ### ####"/>
        </div>
        <div class="item">
          <p>Date de Réservation</p>
          <input type="date" name="reservation_date" />
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <p>Reservation Time</p>
          <input type="time" name="reservation_time" />
               </div>
         <div class="item">
          <p>Une note ?</p>
          <textarea rows="3" name="note"></textarea>
        </div>
         <div class="btn-block">
          @csrf
          <button type="submit">VALIDER</button>
        </div>
      </form>
  <table class="t2">
    <tr>
      <th>Produit</th>
      <th>Quantités</th>
    </tr>
    @foreach ($data as $datas)
    <tr>
      <td>{{$datas['nom_produit']}}</td>
      <td>x {{$datas['qts']}}</td>
      <td><img src="{{$datas['img']}}" alt=""></td>
      <td>
        <select name="qts" id="qts">
        @for($qts = 0; $qts < $datas['qts']; $qts++)
        <option value="{{$datas['qts']}}"  >{{ $qts }}</option>
        @endfor
        </select>
      </td>
    </tr>
    @endforeach
  </table>
@endsection
</body>
</html>

