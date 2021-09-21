<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'title' => 'Titulo ALFA',
                'slug' => 'ALFA',
                'content' => 'content asc content asdasda content',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Titulo BETA',
                'slug' => 'BETA',
                'content' => 'content asc content asdasda content',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'Titulo SIGMA',
                'slug' => 'SIGMA',
                'content' => 'content asc content asdasda content',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'title' => 'Titulo CHARLETS',
                'slug' => 'CHARLETS',
                'content' => 'content asc content asdasda content',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
