<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'Developer 1' => Str::random(10),
            'Developer 2' => Str::random(10),
            'Developer 3' => Str::random(10),
            'Developer 4' => Str::random(10),
        ]);
    }
}
