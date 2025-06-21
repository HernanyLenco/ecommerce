<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Filtro de pesquisa
        if ($request->has('search') && $request->search !== null) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Ordenação
        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
            }
        }

        $products = $query->paginate(12)->withQueryString(); // mantém filtros na paginação

        return view('products', compact('products'));
    }

    public function show($product)
    {
        return view('product', ['product' => $product]);
    }


    public function ProductSingle(Product $product)
    {
        return view('product', ['product' => $product]);
    }
}
