@extends('layouts.dashboard')

@section('content')
    <div class="max-w-4xl mx-auto py-10">
        <h2 class="text-2xl font-bold mb-6">Mis productos</h2>

        <a href="{{ route('products.create') }}" class="font-bold px-4 py-2 bg-blue-600 text-white rounded">Añadir nuevo producto</a>

        <table class="w-full table-auto border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Descipción</th>
                    <th class="px-4 py-2">Stock</th>
                    <th class="px-4 py-2">Precio</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $product->name }}</td>
                        <td class="px-4 py-2">{{ $product->description }}</td>
                        <td class="px-4 py-2">{{ $product->stock }}</td>
                        <td class="px-4 py-2">{{ $product->price }} €</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('products.edit', $product) }}" class="text-blue-600">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
