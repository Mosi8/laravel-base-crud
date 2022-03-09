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
    <main>
        @foreach ($comics as $fumetto)
            <div class="singolo-fumetto">
                <div class="ritaglio">
                    <img src="{{$fumetto['thumb']}}">
                </div>
                <p>{{$fumetto['title']}} <a href="{{route('comics.show', $fumetto->id)}}"><button type="button" class="btn btn-link p-0">Link</button></a></p>
                
            </div>
        @endforeach
    </main>

    
</body>
</html>