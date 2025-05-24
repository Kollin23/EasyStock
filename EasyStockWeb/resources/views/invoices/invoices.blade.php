@extends('layouts.dashboard')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-4">Facturación</h2>

    <table class="w-full table-auto border">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Fecha</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr class="border-t text-center">
                    <td class="px-4 py-2">{{ $invoice->id }}</td>
                    <td class="px-4 py-2">{{ $invoice->total }} €</td>
                    <td class="px-4 py-2">{{ $invoice->date->format('d/m/Y H:i') }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('invoices.show', $invoice) }}" class="text-blue-600 hover:underline">Ver</a> |
                        <a href="{{ route('invoices.pdf', $invoice) }}" class="text-green-600 hover:underline">Descargar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection