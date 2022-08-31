@extends('layouts.app')

@section('main_content')
    <h1>Comics list</h1>
    {{-- Comics --}}
    <div class="comics">
        @foreach ($comics as $comic)
            {{-- Single-Comic --}}
            <div class="comic">
                <div>Titolo: {{ $comic->title }}</div>
                <div>
                    <a href="{{ route('comics.show', ['comic'=> $comic->id]) }}">Scopri Dettagli</a>

                </div>

                <div>
                    <a href="{{ route('comics.edit', ['comic'=> $comic->id]) }}">Modifica Dettagli</a>

                </div>
                
            </div>
            <br>
            
        @endforeach

    </div>

@endsection