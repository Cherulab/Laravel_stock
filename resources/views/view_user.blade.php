<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view</title>
</head>
<body>
    <h1>Bonjour {{$user->name}}</h1>

    <form action="{{route('updateuser', $user->id)}}" method="POST">
        
        <p>Name :</p>
        <input type="text" name='name' placeholder="Name" value="{{$user->name}}"><br>
        <p>Email :</p>
        <input type="email" name='email' placeholder="Email" value="{{$user->email}}">
        <br><br>
        @csrf
        <button type="submit">Save</button>
    </form>
    <br><br><br><br>
    <form action="{{route('deleteuser', $user->id)}}" method="POST">
        @csrf
        <input type="text" placeholder="Enter user Id">
        <button type="submit">Delete User</button>
    </form>
</body>
</html>