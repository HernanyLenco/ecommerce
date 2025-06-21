<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Lista de nomes fixos
        $names = ['Alice', 'Bob', 'Charlie', 'David', 'Eve', 'Frank', 'Grace', 'Hannah', 'Ian', 'Jack'];

        foreach ($names as $name) {
            User::updateOrCreate(
                ['email' => strtolower($name) . '@example.com'],
                [
                    'name' => $name,
                    'password' => bcrypt('password123'),
                    'is_admin' => false,
                    'email_verified_at' => now(),
                ]
            );
        }

        // Usuário administrador
        User::updateOrCreate(
            ['email' => 'angoclothes@gmail.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('admin123'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );
    }
}
