<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederCards extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'card_number' => '1234567890',
            'card_type'   => 'master Card',
            'Total'       => 120000,
            'User_ID'     => 1,
        ]);
        DB::table('cards')->insert([
            'card_number' => '1234567890',
            'card_type'   => 'master Card',
            'Total'       => 120000,
            'User_ID'     => 2,
        ]);
        DB::table('cards')->insert([
            'card_number' => '1234567890',
            'card_type'   => 'master Card',
            'Total'       => 120000,
            'User_ID'     => 3,
        ]);
        DB::table('cards')->insert([
            'card_number' => '1234567890',
            'card_type'   => 'master Card',
            'Total'       => 120000,
            'User_ID'     => 4,
        ]);
    }
}
