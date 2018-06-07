@extends('template')

@section('title', $movie->name)

@section('breadcrumbs')
    {{ Breadcrumbs::render('movie', $movie) }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <img src="{{ $movie->image }}" class="img-thumbnail">
        </div>
        <div class="col-md-9">
            <h1>{{ $movie->name }}</h1>
            <hr>
            <p>Duración: <strong>{{ $movie->length }}</strong> minutos</p>
            Año de estreno: <strong>{{ $movie->year }}</strong>
        </div>
    </div>
@endsection