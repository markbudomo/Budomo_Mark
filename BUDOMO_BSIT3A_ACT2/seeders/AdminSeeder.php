<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'full_name' => 'Reymart Gabales',
                'email' => 'reymartlibrongabales@gmail.com',
                'password' => '12345',
                'phone_number' => '09091234567',
                'address' => 'dyanlang Street',
            ],
            [
                'full_name' => 'Reymart Mendoza',
                'email' => 'reymartmendoza@gmail.com',
                'password' => '12345',
                'phone_number' => '09091234567',
                'address' => 'TabiTabi Street',
            ],
            [
                'full_name' => 'Reymart Honasan',
                'email' => 'reymarthonasan@gmail.com',
                'password' => '12345',
                'phone_number' => '09091234567',
                'address' => 'Ditolang Street',
            ],
        ]);
    }
    
}
