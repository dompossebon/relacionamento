<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            [
                'user_id' => 1,
                'street' => 'RUA teste alpr',
                'number' => 598,
                'city' => 'Florianópolis',
                'state' => 'SC',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'street' => 'RUA tp etst',
                'number' => 204,
                'city' => 'Anchieta',
                'state' => 'SC',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
