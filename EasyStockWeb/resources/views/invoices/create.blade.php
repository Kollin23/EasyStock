@extends('layouts.dashboard')

@section('content')
<div class="max-w-md mx-auto py-10">
    <h2 class="text-xl font-bold mb-4">Registrar venta</h2>

    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf

        <label class="block mb-2">Producto:</label>
        <select name="product_id" class="w-full border px-3 py-2 mb-4">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->stock }} disponibles</option>
            @endforeach
        </select>

        <label class="block mb-2">Cantidad:</label>
        <input type="number" name="quantity" min="1" class="w-full border px-3 py-2 mb-4">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Registrar</button>
    </form>
</div>
@endsection
