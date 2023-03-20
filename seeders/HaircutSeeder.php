<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class HaircutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('haircuts')->insert([
            [
                'haircut_name' => 'Shaggy',
                'haircut_price' => 69.00 ,
                       
            ],
            
        ]);
    }
}
