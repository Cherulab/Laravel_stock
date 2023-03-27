<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('addproduct')}}" method="POST">
        
        <p>Nom produit :</p>
        <input type="text" name='nom_produit' placeholder="Nom" value="d"><br>
        <p>Qts :</p>
        <input type="text " name='qts' placeholder="QTS" value="d">
        <br><br>
        <p>numéro produit :</p>
        <input type="text " name='num_produit' placeholder="num" value="d">
        <br><br>
        <p>img :</p>
        <input type="text " name='img' placeholder="img" value="d">
        <br><br>
        @csrf
        <button type="submit">Save</button>
    </form>
    
</body>
</html>