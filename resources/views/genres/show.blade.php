@extends('template')

@section('title', $genre->name)

@section('breadcrumbs')
    {{ Breadcrumbs::render('genre', $genre) }}
@endsection

@section('content')
    <div class="row">
        @foreach ($genre->movies as $movie)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="{{ $movie->image }}" class="img-thumbnail">

                    <a href="{{ route('movies.show', $movie) }}">
                        <h5 class="mt-2">{{ $movie->name }}</h5>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection