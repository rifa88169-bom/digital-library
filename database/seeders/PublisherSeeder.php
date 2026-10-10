<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    public function run(): void
    {
        Publisher::create([
            'name' => 'Gramedia Pustaka Utama',
            'city' => 'Jakarta'
        ]);

        Publisher::create([
            'name' => 'Mizan Publika',
            'city' => 'Bandung'
        ]);
    }
}