@extends('layouts.dashboard')

@section('content')
    <h1 class="text-2xl font-semibold mb-6">Buenas, {{ Auth::user()->name }}</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-xl border border-blue-200 shadow-sm">
            <p class="text-2xl">Ingresos</p>
            <canvas id="incomeChart" height="100"></canvas>
        </div>
        @if ($productosBajoStock->isNotEmpty())
            <div class="bg-white p-6 rounded-xl border border-blue-200 shadow-sm">
                <p class="text-2xl font-bold mb-4">Avisos de stock</p>
                <ul class="list-inside text-red-600">
                    @foreach ($productosBajoStock as $producto)
                        <li>{{ $producto->name }} -> Stock: {{ $producto->stock }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="bg-white p-4 rounded-xl border border-blue-200 shadow-sm col-span-full">
            <p class="text-2xl mb-4">Últimas ventas</p>
    
            @if ($latestInvoices->isEmpty())
                <p class="text-gray-500">No hay ventas recientes.</p>
            @else
                <div class="space-y-2">
                    @foreach ($latestInvoices as $invoice)
                        <div class="flex justify-between items-center bg-gray-100 p-3 rounded-md">
                            <span class="font-semibold">Venta #{{ $invoice->id }}</span>
                            <span class="text-sm text-gray-600">{{ $invoice->date instanceof \Carbon\Carbon ? $invoice->date->format('d/m/Y H:i') : \Carbon\Carbon::parse($invoice->date)->format('d/m/Y H:i') }}</span>
                            <span class="text-blue-600 font-bold">{{ number_format($invoice->total, 2) }} €</span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    const ctx = document.getElementById('incomeChart').getContext('2d');

    const incomeChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($labels),
            datasets: [{
                label: 'Ingresos (€)',
                data: @json($totals),
                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                borderColor: 'rgba(59, 130, 246, 1)',
                borderWidth: 2,
                tension: 0.4,
                fill: true,
                pointRadius: 4,
                pointBackgroundColor: 'rgba(59, 130, 246, 1)'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return value + ' €';
                        }
                    }
                }
            }
        }
    });
</script>
@endsection
