<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'name' => 'Ariel Gabales',
                'email' => 'arielgabales@gmail.com',
                'password' => '12345',
                'address' => 'dyanlang Street',
                'phone_number' => '09091234567',
                
            ],
            [
                'name' => 'Ariel Gabe',
                'email' => 'arielgabe@gmail.com',
                'password' => '12345',
                'address' => 'dyanlang Street',
                'phone_number' => '09091234567',
            ],
            [
                'name' => 'Ariel Umaga',
                'email' => 'arielumaga@gmail.com',
                'password' => '12345',
                'address' => 'dyanlang Street',
                'phone_number' => '09091234567',
            ],
        ]);
    }
}
