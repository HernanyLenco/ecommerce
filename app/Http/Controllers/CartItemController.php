<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function index()
    {
        $cart = session()->get('carrinho', []);

        return view('carrinho', compact('cart'));
    }

    public function add(Product $product)
    {
        $cart = session()->get('carrinho', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->image,
            ];
        }
        session()->put('carrinho', $cart);

        return redirect()->back()->with('success', 'Produto adicionado ao carrinho!');
    }

    public function remove($id)
    {
        $cart = session()->get('carrinho', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('carrinho', $cart);
        }

        return redirect()->back()->with('success', 'Produto removido do carrinho.');
    }
}
