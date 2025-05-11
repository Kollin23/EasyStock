@extends('layouts.dashboard')

@section('content')
    <div class="max-w-4xl mx-auto py-10">
        <h2 class="text-2xl font-bold mb-6">Mis productos</h2>


        <table class="w-full table-auto border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Stock</th>
                    <th class="px-4 py-2">Precio</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>

        </table>
    </div>
@endsection
