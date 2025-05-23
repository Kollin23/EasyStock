@extends('layouts.dashboard')

@section('content')
<div class="max-w-md mx-auto py-10">
    <h2 class="text-xl font-bold mb-4">Registrar venta</h2>

    <form action="{{ route('invoices.store') }}" method="POST">
    @csrf

    <div id="products-wrapper">
        <div class="product-group mb-4">
            <label>Producto:</label>
            <select name="products[0][id]" class="border rounded p-2 w-full">
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->price }}€  - {{ $product->stock }} disponibles</option>
                @endforeach
            </select>

            <label>Cantidad:</label>
            <input type="number" name="products[0][quantity]" min="1" value="1" class="border rounded p-2 w-full">
        </div>
    </div>

    <div class="flex justify-between items-center">
        <button type="button" onclick="addProduct()" class="bg-gray-300 px-4 py-2 rounded mt-4">+ Añadir otro producto</button>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded mt-4">Registrar venta</button>
    </div>
    
    </form>
</div>
<script>
    let index = 1;
    function addProduct() {
        const wrapper = document.getElementById('products-wrapper');
        const group = document.createElement('div');
        group.className = 'product-group mb-4';
        group.innerHTML = `
            <label>Producto:</label>
            <select name="products[${index}][id]" class="border rounded p-2 w-full">
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->price }}€ - {{ $product->stock }} disponibles</option>
                @endforeach
            </select>

            <label>Cantidad:</label>
            <input type="number" name="products[${index}][quantity]" min="1" value="1" class="border rounded p-2 w-full">
        `;
        wrapper.appendChild(group);
        index++;
    }
</script>
@endsection
