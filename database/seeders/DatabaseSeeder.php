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
        // Author::create([
        //     'name' => 'J. K. Rowling',
        //     'email' => 'jkrowling@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
    
        // Author::create([
        //     'name' => 'Pidi Baiq',
        //     'email' => 'pidibaiq@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        Author::factory(6)->create();
        Book::factory(30)->create();

        Genre::create([
            'name' => "Fantasy",
            'slug' => 'fantasy'
        ]);
          
        Genre::create([
            'name' => "Romance",
            'slug' => 'romance'
        ]);

        Genre::create([
            'name' => "Horror",
            'slug' => 'horror'
        ]);

        Genre::create([
            'name' => "Thriller",
            'slug' => 'thriller'
        ]);

        // Book::create([
        //     'title' => "Harry Potter and the Philosopher's Stone",
        //     'genre_id' => 1,
        //     'author_id' => 1,
        //     'slug' => 'harry-potter-and-the-philosophers-stone',
        //     'description' => "Harry Potter thinks he is an ordinary boy - until he is rescued by an owl, taken to Hogwarts School of Witchcraft and Wizardry, learns to play Quidditch and does battle in a deadly duel. The Reason ... HARRY POTTER IS A WIZARD!",
        //     'year' => '1997',
        //     'pages' => 223
        // ]);
          
        // Book::create([
        //     'title' => 'Harry Potter and the Chamber of Secrets',
        //     'genre_id' => 1,
        //     'author_id' => 1,
        //     'slug' => 'harry-potter-and-the-chamber-of-secrets',
        //     'description' => "Harry Potter is back for his second year at Hogwarts School of Witchcraft and Wizardry. There are big changes at Hogwarts this year, and Harry is excited to find out about them. But when strange things start happening, Harry and his friends Ron and Hermione decide to investigate. They discover that someone or something is opening the Chamber of Secrets, a room in the school believed to be full of horrors. Could it be Harry's old enemy Draco Malfoy? Or could it possibly be Hagrid, whose mysterious past is finally told?",
        //     'year' => '1998',
        //     'pages' => 251
        // ]);

        // Book::create([
        //     'title' => "Dilan: Dia Adalah Dilanku Tahun 1990",
        //     'genre_id' => 2,
        //     'author_id' => 2,
        //     'slug' => 'dilan-dia-adalah-dilanku-tahun-1990',
        //     'description' => "Dilan: Dia adalah Dilanku tahun 1990 adalah sebuah novel karya Pidi Baiq yang diterbitkan oleh Penerbit Pastel Books (Mizan Group). Novel tersebut menjadi buku dengan penjualan terbaik di Gramedia, serta diadaptasi ke dalam sebuah film yang berjudul Dilan 1990.",
        //     'year' => '2014',
        //     'pages' => 332
        // ]);
    }
}
