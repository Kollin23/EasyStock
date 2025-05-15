@extends('layouts.dashboard')

@section('content')
<div class="max-w-2xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Crear nuevo producto</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block font-bold mb-1">Nombre:</label>
            <input type="text" name="name" id="name" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block font-bold mb-1">Descripción:</label>
            <input name="description" id="description" class="w-full border px-3 py-2 rounded"></input>
        </div>

        <div class="mb-4">
            <label for="stock" class="block font-bold mb-1">Stock:</label>
            <input type="number" name="stock" id="stock" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block font-bold mb-1">Precio (€):</label>
            <input type="number" step="0.01" name="price" id="price" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('products.index') }}"
               class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">
                Cancelar
            </a>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Guardar producto
            </button>
        </div>
    </form>
</div>
@endsection
