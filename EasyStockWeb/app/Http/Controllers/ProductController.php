<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('user_id', Auth::id())->get();
        return view('products.index', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
        ]);

        Product::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'category_id' => $request->category_id ?? null,
            'description' => $request->description ?? null,
        ]);

        return response()->json(['message' => 'Producto creado'], 200);
    }
}
