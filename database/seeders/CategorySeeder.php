<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Now you can use the DB facade to insert data
        DB::table('category')->insert([
            ['id' => 1, 'Category' => 'Pop Art'],
            ['id' => 2, 'Category' => 'Realism'],
            ['id' => 3, 'Category' => 'Portrait'],
            ['id' => 4, 'Category' => 'Abstract'],
            ['id' => 5, 'Category' => 'Expressionism'],
            ['id' => 6, 'Category' => 'Expressionism'],
            ['id' => 7, 'Category' => 'Photorealism'],
        ]);
    }
}
