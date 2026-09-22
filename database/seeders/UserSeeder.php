<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@smkn1cijati.sch.id'],
            [
                'name' => 'Admin SMKN 1 Cijati',
                'password' => Hash::make('admin12345'),
            ]
        );
    }
}