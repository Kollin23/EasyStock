@extends('layouts.dashboard')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Factura #{{ $invoice->id }}</h2>

    <p class="mb-4">Fecha: {{ $invoice->date->format('d/m/Y H:i') }}</p>

    <table class="w-full table-auto border mb-6">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Producto</th>
                <th class="px-4 py-2">Cantidad</th>
                <th class="px-4 py-2">Precio unitario</th>
                <th class="px-4 py-2">Total</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($invoice->products as $product)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $product->name }}</td>
                    <td class="px-4 py-2">{{ $product->pivot->quantity }}</td>
                    <td class="px-4 py-2">{{ $product->pivot->price_at_purchase }} €</td>
                    <td class="px-4 py-2">
                        {{ $product->pivot->quantity * $product->pivot->price_at_purchase }} €
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-right font-bold text-xl">
        Total: {{ $invoice->total }} €
    </div>

    <div class="flex justify-between items-center pt-6">
        <button type="button" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400"><a href="{{ route('invoices.invoices') }}">Volver</a></button>
        
        <a href="{{ route('invoices.pdf', $invoice) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Descargar PDF</a>
    </div>
</div>
@endsection
