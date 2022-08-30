@extends('layouts.app')

@section('main_content')
    <h1>Comics list</h1>
    {{-- Comics --}}
    <div class="comics">
        @foreach ($comics as $comic)
            {{-- Single-Comic --}}
            <div class="comic">
                <div>Titolo: {{ $comic->title }}</div>
                <div>Descrizione: {{ $comic->description }}</div>
                <div>prezzo: {{ $comic->price }}</div>
                <div>serie: {{ $comic->series }}</div>
                <div>data vendita: {{ $comic->sale_date }}</div>
                <div>genere: {{ $comic->type }}</div>

            </div>
            <br>
            
        @endforeach

    </div>

@endsection