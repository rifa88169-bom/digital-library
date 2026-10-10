<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::create([
            'name' => 'Tere Liye',
            'biography' => 'Penulis novel terkenal asal Indonesia.'
        ]);

        Author::create([
            'name' => 'Andrea Hirata',
            'biography' => 'Penulis novel Laskar Pelangi.'
        ]);
    }
}