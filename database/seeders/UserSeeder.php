<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Modificar al gusto
        User::create([
            'name' => 'Mario Barahona',
            'email' => 'pistacho@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
