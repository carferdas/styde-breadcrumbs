@extends('template')

@section('title', 'Inicio')

@section('breadcrumbs')
    {{ Breadcrumbs::render('home') }}
@endsection

@section('content')
    Pagina de inicio de mi cine.
    <a href="{{ route('genres') }}">Ver generos</a>
@endsection