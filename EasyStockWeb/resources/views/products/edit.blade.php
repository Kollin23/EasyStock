@extends('layouts.dashboard')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Editar producto</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block font-semibold mb-1">Nombre del producto</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}"
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="mb-4">
            <label for="description" class="block font-semibold mb-1">Descripción</label>
            <input type="text" id="description" name="description" value="{{ old('description', $product->description) }}"
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="mb-4">
            <label for="stock" class="block font-semibold mb-1">Stock disponible</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock', $product->stock) }}"
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="mb-6">
            <label for="price" class="block font-semibold mb-1">Precio (€)</label>
            <input type="number" step="0.01" id="price" name="price" value="{{ old('price', $product->price) }}"
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('products.index') }}"
               class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">
                Cancelar
            </a>

            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                Guardar cambios
            </button>
        </div>
    </form>
</div>
@endsection
