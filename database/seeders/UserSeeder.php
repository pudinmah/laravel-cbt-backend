<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // NOTE: Dinamic
        \App\Models\User::factory(100)->create();


        // NOTE: Static
        \App\Models\User::create([
            "name"=> "Mahpudin",
            "email"=> "Mahpudin@gmail.com",
            "password"=> Hash::make("12345678"),
            "roles"=> "ADMIN",
            "phone"=> "085155288364",
        ]);
    }
}
