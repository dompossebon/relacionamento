<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'CatAlfa',
                'description' => 'minha categoria A',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'CatBeta',
                'description' => 'minha categoria B',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'CatDelta',
                'description' => 'minha categoria D',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'CatEcho',
                'description' => 'minha categoria E',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
