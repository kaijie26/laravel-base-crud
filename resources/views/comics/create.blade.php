@extends('layouts.app')

@section('main_content')
    <h1>Create your comic</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <br>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series">
        </div>
        <br>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type">
        </div>
        <br>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <br>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price">
        </div>
        <br>

        <div>
            <label for="sale_date">Url image</label>
            <input type="date" name="sale_date" id="sale_date">
        </div>
        <br>

        <div>
            <label for="thumb">Url image</label>
            <input type="url" name="thumb" id="thumb">
        </div>
        <br>
        
        <button>Salva</button>
    </form>
    
@endsection