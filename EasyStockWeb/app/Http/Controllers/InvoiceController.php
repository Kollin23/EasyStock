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
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::find($request->product_id);
        $total = $product->price * $request->quantity;

        $invoice = Invoice::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'date' => new DateTime(),
        ]);

        $invoice->products()->attach($product->id, [ // modificacion de Laravel para un insert
            'quantity' => $request->quantity,
            'price_at_purchase' => $product->price,
        ]);

        $product->decrement('stock', $request->quantity);

        return redirect()->route('invoices.index')->with('success', 'Venta registrada.');
    }
}
