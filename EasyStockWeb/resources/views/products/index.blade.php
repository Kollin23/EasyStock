@extends('layouts.dashboard')

@section('content')
    <div class="max-w-4xl mx-auto py-10">
        <h2 class="text-2xl font-bold mb-6">Mis productos</h2>

        <div class="flex justify-between items-center mb-4">
            <form method="GET" action="{{ route('products.index') }}" class="flex items-center space-x-2">
                <input type="text" name="search" placeholder="Buscar producto..." value="{{ request('search') }}" class="px-4 py-2 border rounded"
                >
                <button type="submit" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Buscar</button>
            </form>

            <a href="{{ route('products.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Añadir nuevo producto</a>
</div>


        <div class="py-6">
        <table class="w-full table-auto border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Descripción</th>
                    <th class="px-4 py-2">Stock</th>
                    <th class="px-4 py-2">Precio</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($products as $product)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $product->name }}</td>
                        <td class="px-4 py-2">{{ $product->description }}</td>
                        <td class="px-4 py-2">{{ $product->stock }}</td>
                        <td class="px-4 py-2">{{ $product->price }} €</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('products.edit', $product) }}" class="text-blue-600 hover:underline">Editar</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este producto?');">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
