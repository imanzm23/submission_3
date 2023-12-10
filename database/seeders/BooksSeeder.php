<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y/m/d H:i:s');
        $booksData = [
            [
                'book_name' => 'Python Programming',
                'author' => 'Ihsan',
                'published_at' => $date
            ],
            [
                'book_name' => 'Mathematics',
                'author' => 'Iman',
                'published_at' => $date
            ],
            [
                'book_name' => 'German Base',
                'author' => 'Matheus',
                'published_at' => $date
            ],
            [
                'book_name' => 'Indonesia',
                'author' => 'Harry',
                'published_at' => $date
            ],
            [
                'book_name' => 'JavaScript Programming',
                'author' => 'Kamal',
                'published_at' => $date
            ],
            [
                'book_name' => 'IPS',
                'author' => 'Nizar',
                'published_at' => $date
            ],
            [
                'book_name' => 'IPA',
                'author' => 'Mantox',
                'published_at' => $date
            ],
        ];

        foreach($booksData as $value){
            Books::create($value);
        }

    }
}