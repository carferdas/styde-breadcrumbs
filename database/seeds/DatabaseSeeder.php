<?php

use App\{Genre, Movie};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $genres = factory(Genre::class, 10)->create();

        $genres->each(function ($genre) {
            factory(Movie::class, 5)->create([
                'genre_id' => $genre->id
            ]);
        });
    }
}
