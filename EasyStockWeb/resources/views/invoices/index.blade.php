@extends('layouts.dashboard')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-4">Listado de ventas</h2>

    <a href="{{ route('invoices.create') }}" class="mb-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Registrar venta</a>

    <table class="w-full table-auto border">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $invoice->id }}</td>
                    <td class="px-4 py-2">{{ $invoice->total }} €</td>
                    <td class="px-4 py-2">{{ $invoice->date->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection