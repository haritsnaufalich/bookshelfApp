<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Book;
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
        Author::factory(3)->create();
        Book::factory(21)->create();

        Genre::create([
            'name' => "Fantasy",
            'slug' => 'fantasy'
        ]);

        Genre::create([
            'name' => "Drama",
            'slug' => 'drama'
        ]);

        Genre::create([
            'name' => "Comedy",
            'slug' => 'comedy'
        ]);

        Genre::create([
            'name' => "Action",
            'slug' => 'action'
        ]);
    }
}
