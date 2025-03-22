<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Patient;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Juan Armando Vallejo Hernández',
            'email' => 'juanarmandovh20@gmail.com',
            'password' => Hash::make('prueba1234'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'phone' => '4492616964'
        ]);

        Patient::factory(10)->create();
    }
}
