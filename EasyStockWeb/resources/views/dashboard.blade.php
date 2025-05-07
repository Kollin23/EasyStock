@extends('layouts.dashboard')

@section('content')
    <h1 class="text-2xl font-semibold mb-6">Buenas, {{ Auth::user()->name }}</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Card de ingresos -->
        <div class="bg-white p-6 rounded-xl border border-blue-200 shadow-sm">
            <p class="text-gray-500">Ingresos</p>
        </div>

        <!-- Últimas ventas -->
        <div class="bg-white p-4 rounded-xl border border-blue-200 shadow-sm col-span-full">
            <p class="text-gray-500 mb-4">Últimas ventas</p>
            <div class="space-y-2">
                @for ($i = 0; $i < 5; $i++)
                    <div class="bg-gray-200 h-6 rounded-md animate-pulse"></div>
                @endfor
            </div>
        </div>
    </div>
@endsection
