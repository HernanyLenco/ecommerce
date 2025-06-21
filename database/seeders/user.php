<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create([
            'name' => ['Alice', 'Bob', 'Charlie', 'David', 'Eve', 'Frank', 'Grace', 'Hannah', 'Ian', 'Jack'][rand(0, 9)],
            'email' => function (array $attributes) {
                return strtolower($attributes['name']) . '@example.com';
            },
            'password' => bcrypt('password123'),
        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'angoclothes@gmail.com',
            'password' => bcrypt('admin123'),
            'is_admin' => true,
        ]);
    }
}
