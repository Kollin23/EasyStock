<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EasyStock Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen flex">
    <!-- Sidebar -->
    <aside id="sidebar" class="group flex flex-col w-16 hover:w-56 transition-all duration-300 bg-white border-r shadow-md overflow-hidden">
        <div class="flex items-center justify-center h-16">
            <a href=""><img src="{{ asset('images/logo_pequenyo.png') }}" alt="Logo Pequeño"></a>
        </div>
        <nav class="flex-1 space-y-6 mt-6 text-base">
            <a href="#" class="group flex items-center px-4 py-2">
                <img src="{{ asset('images/Combo Chart.png') }}" alt="Ventas" class="h-8 w-8">
                <span class="ml-3 hidden group-hover:inline">Ventas</span>
            </a>
            <a href="#" class="group flex items-center px-4 py-2">
                <img src="{{ asset('images/Open Box.png') }}" alt="Stock" class="h-8 w-8">
                <span class="ml-3 hidden group-hover:inline">Stock</span>
            </a>
            <a href="#" class="group flex items-center px-4 py-2">
                <img src="{{ asset('images/Purchase Order.png') }}" alt="Facturas" class="h-8 w-8">
                <span class="ml-3 hidden group-hover:inline">Facturas</span>
            </a>
        </nav>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center px-4 py-4 w-full text-left">
                <img src="{{ asset('images/Shutdown.png') }}" alt="Salir" class="h-8 w-8">
                <span class="ml-3 hidden group-hover:inline text-base font-bold">Salir</span>
            </button>
        </form>
    </aside>

    <!-- Main content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</body>
</html>
