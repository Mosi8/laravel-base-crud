<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Comics</title>
</head>
<body>
    
    <main>
        @foreach ($comics as $fumetto)
            <div class="singolo-fumetto">
                <div class="ritaglio">
                    <img src="{{$fumetto['thumb']}}">
                </div>
                <p>{{$fumetto['title']}} 
                    <a href="{{route('comics.show', $fumetto->id)}}"><button type="button" class="btn btn-link p-0">Link</button></a>
                    <a href="{{route('comics.edit', $fumetto->id)}}" class="m-3"><button type="button" class="btn btn-primary">Modifica</button></a>                    
                </p>
                <form action="{{route('comics.destroy', $fumetto->id)}}" method="POST" class="mb-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro?')">Cancella</button>
                </form>
                
            </div>
        @endforeach
    </main>
    <a href="{{route('comics.create')}}" class="d-inline-block m-3"><button type="button" class="btn btn-warning">Aggiungi</button></a>
    

    
</body>
</html>