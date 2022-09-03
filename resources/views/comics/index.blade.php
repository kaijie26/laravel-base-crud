@extends('layouts.app')

@section('main_content')
    <div class="container">

        @if ($deleted === 'yes')
            <div class="alert alert-success" role="alert">
                Fumetto eliminato con successo
            </div>
        @endif
        
        <h1>Comics list</h1>
        {{-- Comics --}}
        <div class="row row-cols-4 gy-4">
            @foreach ($comics as $comic)
                {{-- Single-Comic --}}
                <div class="col">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
    
                        <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        </div>
    
                        <ul class="list-group list-group-flush">
                            <div>Serie: {{$comic->series}}</div>
                            <div>Genere: {{$comic->type}}</div>
                        
                        </ul>
    
                        <div class="card-body">
                            <div>
                                <a href="{{ route('comics.show', ['comic'=> $comic->id]) }}">Scopri Dettagli</a>

                            </div>
                            <div>
                                <a href="{{ route('comics.edit', ['comic'=> $comic->id]) }}">Modifica Dettagli</a>

                            </div>

                        </div>

                        <div>
                            <form action="{{ route('comics.destroy', ['comic'=> $comic->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                    
                                <input class="btn btn-danger" type="submit" value="Cancella" onClick="return confirm('Sei sicuro di voler cancellare?')">
                            </form>
                        </div>
                    </div>

                </div>
                
            @endforeach

        </div>

    </div>
    

@endsection
