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
    <table class="m-t-mt">
        <tr>
            <th>Nom</th>
            <th>Numéro</th>
            <th>date</th>
            <th>time</th>
            <th>note</th>
        </tr>
        @foreach($fiche as $fiches)
        <tr>
            <td><h3>- {{$fiches['client_name']}}</h3></td>
            <td><p>0{{$fiches['client_phone']}}</p></td>
            <td><p>{{$fiches['reservation_date']}}</p></td>
            <td><p>{{$fiches['reservation_time']}}</p></td>
            <td><p>{{$fiches['note']}}</p></td>
        </tr>
    @endforeach
    </table>
    
   
    @endsection
</body>
</html>