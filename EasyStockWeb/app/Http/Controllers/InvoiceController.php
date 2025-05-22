<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Datetime;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::where('user_id', Auth::id())->latest()->get();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        $products = Product::where('user_id', Auth::id())->get();
        return view('invoices.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'products' => 'required|array|min:1',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        $total = 0;

        foreach ($request->products as $item) {
            $product = Product::find($item['id']);
            $total += $product->price * $item['quantity'];
        }

        $invoice = Invoice::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'date' => new DateTime(),
        ]);

        foreach ($request->products as $item) {
            $product = Product::find($item['id']);

            $invoice->products()->attach($product->id, [ // modificacion de Laravel para un insert
                'quantity' => $item['quantity'],
                'price_at_purchase' => $product->price,
            ]);

            $product->stock -= $item['quantity'];
            $product->save();
        }

        return redirect()->route('invoices.index')->with('success', 'Venta registrada.');
    }
}
