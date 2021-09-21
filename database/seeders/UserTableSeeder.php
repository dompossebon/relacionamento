<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Alexandre Possebon',
                'email' => 'dompossebon@gmail.com',
                'email_verified_at' => now(),
                'password' => '123',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tatiana Picoli',
                'email' => 'tati@gmail.com',
                'email_verified_at' => now(),
                'password' => '321',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
