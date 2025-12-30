<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Rolando',
            'email' => 'rolando.diazv92@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
