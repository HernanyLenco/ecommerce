<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\category::factory(5)->create(
            [
                'name' => ['Jeans', 'T-Shirts', 'Jackets', 'Shoes', 'Accessories'][rand(0, 4)],
                'image' => 'https://picsum.photos/640/480?random=' . rand(1, 1000),
            ]
        );
    }
}
