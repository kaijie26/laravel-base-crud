@extends('layouts.app')

@section('main_content')
    <h1>Create your comic</h1>

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

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title')}}">
        </div>
        <br>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series" value="{{ old('series')}}">
        </div>
        <br>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type" value="{{ old('type')}}">
        </div>
        <br>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ old('description')}}</textarea>
        </div>
        <br>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{ old('price')}}">
        </div>
        <br>

        <div>
            <label for="sale_date">Sale_date</label>
            <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date')}}">
        </div>
        <br>

        <div>
            <label for="thumb">Url image</label>
            <input type="text" name="thumb" id="thumb" value="{{ old('thumb')}}">
        </div>
        <br>
        
        <button>Salva</button>
    </form>
    
@endsection