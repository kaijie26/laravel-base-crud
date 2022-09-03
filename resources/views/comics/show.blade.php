@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <br>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <br>
        <div>Prezzo: {{ $comic->price }}</div>
        <br>
        <div>Serie: {{ $comic->series }}</div>
        <br>
        <div>Data vendita: {{ $comic->sale_date }}</div>
        <br>
        <div>Genere: {{ $comic->type }}</div>
        <br>
        <p>Descrizione: {{ $comic->description }}</p>
        <br>
        <div>
            <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
        </div>
        <br>
        <div>
            <form action="{{ route('comics.destroy', ['comic'=> $comic->id]) }}" method="post">
                @csrf
                @method('DELETE')
    
                <input class="btn btn-danger" type="submit" value="Cancella" onClick="return confirm('Sei sicuro di voler cancellare?')">
            </form>
        </div>
        <br>

    </div>

@endsection