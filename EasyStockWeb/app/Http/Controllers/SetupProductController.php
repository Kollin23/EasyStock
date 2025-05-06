<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

class SetupProductController extends Controller
{
    public function create()
    {
        return view('setup.products');
    }

    public function store(Request $request)
    {
        $productController = new ProductController();

        foreach ($request->products as $product) {
            $productRequest = new Request([
                'name' => $product['name'],
                'stock' => $product['stock'],
                'price' => $product['price'],
                'description' => $product['description'] ?? null,
                'category_id' => $product['category_id'] ?? null,
                'user_id' => Auth::id(),
            ]);

            $productController->store($productRequest);
        }

        return redirect()->route('dashboard');
    }
}
