@extends('layouts.app')

@section('main_content')
    <h1>{{ $comic->title }}</h1>
    <div>Descrizione: {{ $comic->description }}</div>
    <br>
    <div>Prezzo: {{ $comic->price }}</div>
    <br>
    <div>Serie: {{ $comic->series }}</div>
    <br>
    <div>Data vendita: {{ $comic->sale_date }}</div>
    <br>
    <div>Genere: {{ $comic->type }}</div>
    <br>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

@endsection