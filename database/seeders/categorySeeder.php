<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Jeans', 'T-Shirts', 'Jackets', 'Shoes', 'Accessories'];

        foreach ($categories as $index => $name) {
            Category::updateOrCreate(
                ['name' => $name],
                ['image' => 'https://picsum.photos/640/480?random=' . ($index + 1)]
            );
        }
    }
};