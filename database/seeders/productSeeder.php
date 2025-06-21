<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['Camisa Social', 'T-Shirts'],
            ['Camisa Slim', 'T-Shirts'],
            ['Camisa Casual', 'T-Shirts'],
            ['T-Shirt Básica', 'T-Shirts'],
            ['T-Shirt Oversized', 'T-Shirts'],
            ['T-Shirt Estampada', 'T-Shirts'],

            ['Jeans Skinny', 'Jeans'],
            ['Jeans Destroyed', 'Jeans'],
            ['Jeans Clássico', 'Jeans'],
            ['Jeans Reto', 'Jeans'],
            ['Jeans Rasgado', 'Jeans'],
            ['Bermuda Jeans', 'Jeans'],

            ['Jaqueta de Couro', 'Jackets'],
            ['Jaqueta Jeans', 'Jackets'],
            ['Casaco Puffer', 'Jackets'],
            ['Blusão Casual', 'Jackets'],
            ['Jaqueta Corta-Vento', 'Jackets'],
            ['Casaco de Inverno', 'Jackets'],

            ['Tênis Esportivo', 'Shoes'],
            ['Tênis Casual', 'Shoes'],
            ['Botas Masculinas', 'Shoes'],
            ['Sapato Social', 'Shoes'],
            ['Chinelos Urbanos', 'Shoes'],
            ['Tênis Branco', 'Shoes'],

            ['Boné Estiloso', 'Accessories'],
            ['Relógio Masculino', 'Accessories'],
            ['Cinto de Couro', 'Accessories'],
            ['Carteira Slim', 'Accessories'],
            ['Pulseira Casual', 'Accessories'],
            ['Óculos Escuros', 'Accessories'],
        ];

        foreach ($products as $index => [$name, $categoryName]) {
            $category = Category::where('name', $categoryName)->first();

            if ($category) {
                Product::create([
                    'name' => $name,
                    'description' => 'Produto de alta qualidade e estilo único.',
                    'price' => rand(4990, 19990), // Preço entre 4.990 Kz e 19.990 Kz
                    'image' => "https://picsum.photos/seed/{$index}/640/480",
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
