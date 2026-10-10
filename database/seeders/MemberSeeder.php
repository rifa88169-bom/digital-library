<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        Member::create([
            'name' => 'Haikal Faiz',
            'email' => 'haikal@example.com',
            'phone' => '081234567890',
            'address' => 'Medan, Sumatera Utara'
        ]);
    }
}