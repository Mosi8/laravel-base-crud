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
    <div class="container text-white my-5">
        <h1>Modifica Fumetto</h1>  

        <form action="{{route("comics.update", $comic->id)}}" method="POST">
            
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Nome</label>
                <input type="string" class="form-control" id="title" name="title" placeholder="Inserisci il nome del fumetto" value="{{$comic->title}}">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto" value="{{$comic->description}}"></textarea>
            </div>
            <div class="form-group">
                <label for="thumb">Immagine</label>
                <input type="string" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url dell'immagine del fumetto" value="{{$comic->thumb}}">
            </div>
            <div class="form-group">
                <label for="price">Prezzo (€)</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{$comic->price}}">
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="string" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{$comic->series}}">
            </div>
            <div class="form-group">
                <label for="sale_date">Data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita" value="{{$comic->sale_date}}">
            </div>
            <div class="form-group">
                <label for="type">Categoria</label>
                <input type="string" class="form-control" id="type" name="type" placeholder="Inserisci la categoria" value="{{$comic->type}}">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    
</body>
</html>