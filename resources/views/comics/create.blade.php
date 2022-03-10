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
                <input type="string" class="form-control" id="title" name="title" placeholder="Inserisci il nome del fumetto">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto"></textarea>
            </div>
            <div class="form-group">
                <label for="thumb">Immagine</label>
                <input type="string" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url dell'immagine del fumetto">
            </div>
            <div class="form-group">
                <label for="price">Prezzo (€)</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="string" class="form-control" id="series" name="series" placeholder="Inserisci la serie">
            </div>
            <div class="form-group">
                <label for="sale_date">Data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita">
            </div>
            <div class="form-group">
                <label for="type">Categoria</label>
                <input type="string" class="form-control" id="type" name="type" placeholder="Inserisci la categoria">
            </div>
            
            
            <button type="submit" class="btn btn-warning">Aggiungi</button>
        </form>
    </div>

    
</body>
</html>