<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
</head>
<body>
    @extends('layouts.base') 
    @section('content')
    <h1>Vos Clients</h1>
    <table class="m-t-mt">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $users)
            <tr>
                <td>{{$users['id']}}</td>
                <td>{{$users['name']}}</td>
                <td>{{$users['email']}}</td>
                <td><a href="{{route('viewuser', $users->id)}}">View Client</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection  
</body>
</html>
