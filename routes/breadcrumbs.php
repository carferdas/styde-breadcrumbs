<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Inicio
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Inicio', route('home'));
});

// Inicio > Generos
Breadcrumbs::for('genres', function ($trail) {
    $trail->parent('home');
    $trail->push('Generos', route('genres'));
});

// Inicio > Generos > [Genero]
Breadcrumbs::for('genre', function ($trail, $genre) {
    $trail->parent('genres');
    $trail->push($genre->name, route('genres.show', $genre));
});

// Inicio > Generos > [Genero] > [Pelicula]
Breadcrumbs::for('movie', function ($trail, $movie) {
    $trail->parent('genre', $movie->genre);
    $trail->push($movie->name, route('movies.show', $movie));
});