<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::create([
            'name'=> 'Wahyu Gerhana Lubis',
            'email'=> 'wahyugerhana18@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
        ]);
    }
}
