@extends('layouts.app')

@section('main_content')
    <h1>{{ $comic->title }}</h1>
    <div>Descrizione: {{ $comic->description }}</div>
    <div>prezzo: {{ $comic->price }}</div>
    <div>serie: {{ $comic->series }}</div>
    <div>data vendita: {{ $comic->sale_date }}</div>
    <div>genere: {{ $comic->type }}</div>

@endsection