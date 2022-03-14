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
        <h1>Aggiungi Fumetto</h1>  

        <form action="{{route("comics.store")}}" method="POST">
            
            @csrf

            <div class="form-group">
                <label for="title">Nome</label>
                <input type="string" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il nome del fumetto" value="{{old("title")}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Inserisci la descrizione del fumetto">{{old("description")}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="thumb">Immagine</label>
                <input type="string" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url dell'immagine del fumetto" value="{{old("thumb")}}">
            </div>
            <div class="form-group">
                <label for="price">Prezzo (€)</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo" value="{{old("price")}}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="string" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie" value="{{old("serie")}}">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="sale_date">Data di uscita</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita" value="{{old("sale_date")}}">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Categoria</label>
                <input type="string" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Inserisci la categoria" value="{{old("type")}}">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            
            <button type="submit" class="btn btn-warning">Aggiungi</button>
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