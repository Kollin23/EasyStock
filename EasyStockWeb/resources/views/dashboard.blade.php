@extends('layouts.dashboard')

@section('content')
    <h1 class="text-2xl font-semibold mb-6">Buenas, {{ Auth::user()->name }}</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-xl border border-blue-200 shadow-sm">
            <p class="text-2xl">Ingresos</p>
            <canvas id="incomeChart" height="100"></canvas>
        </div>
        <div class="bg-white p-4 rounded-xl border border-blue-200 shadow-sm col-span-full">
            <p class="text-2xl mb-4">Últimas ventas</p>
            <div class="space-y-2">
                @for ($i = 0; $i < 5; $i++)
                    <div class="bg-gray-200 h-6 rounded-md"></div>
                @endfor
            </div>
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
