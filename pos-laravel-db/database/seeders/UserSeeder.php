<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'admin',    'full_name' => 'Andrea Magnaye'],
            ['username' => 'mmanager', 'full_name' => 'Miguel Manalo'],
            ['username' => 'cashier1', 'full_name' => 'Rosa Villanueva'],
            ['username' => 'cashier2', 'full_name' => 'Paolo Garcia'],
            ['username' => 'stock01',  'full_name' => 'Grace Aquino'],
            ['username' => 'sales01',  'full_name' => 'Noel Castillo'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
