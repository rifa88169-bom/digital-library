<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Hafalan Shalat Delisa',
            'author_id' => 1,
            'publisher_id' => 1,
            'publication_year' => 2005,
            'stock' => 10
        ]);

        Book::create([
            'title' => 'Sang Pemimpi',
            'author_id' => 2,
            'publisher_id' => 2,
            'publication_year' => 2006,
            'stock' => 8
        ]);
    }
}