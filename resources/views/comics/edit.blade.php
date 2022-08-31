@extends('layouts.app')

@section('main_content')
    <h1>Edit Comic</h1>

    {{-- Errori della validazione --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', ['comic'=> $comic->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') ? old('title') : $comic->title}}">
        </div>
        <br>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series" value="{{ old('series') ? old('series') : $comic->series}}">
        </div>
        <br>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type" value="{{ old('type') ? old('type') : $comic->type}}">
        </div>
        <br>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ old('description') ? old('description') : $comic->description}}</textarea>
        </div>
        <br>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{ old('price') ? old('price') : $comic->price}}">
        </div>
        <br>

        <div>
            <label for="sale_date">Sale_date</label>
            <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date}}">
        </div>
        <br>

        <div>
            <label for="thumb">Url image</label>
            <input type="text" name="thumb" id="thumb" value="{{ old('thumb') ? old('thumb') : $comic->thumb}}">
        </div>
        <br>
        
        <button>Salva</button>
    </form>
    
@endsection