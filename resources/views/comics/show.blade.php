<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <h1 class="text-white mt-3">{{$comic->title}}</h1>
        <img src="{{$comic->thumb}}" alt="">
        <p class="text-white my-1">{{$comic->description}}</p>
        <span class="text-white my-1 d-block">Series: {{$comic->series}}</span>
        <span class="text-white mb-5 d-block">Price: {{$comic->price}}€</span>
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-light">Back</button></a>
    </div>

    
</body
</html>