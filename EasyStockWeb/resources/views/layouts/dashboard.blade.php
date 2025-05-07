<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EasyStock Dashboard</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex">
    <!-- Sidebar -->
    <aside id="sidebar" class="group flex flex-col w-16 hover:w-56 transition-all duration-300 bg-white border-r shadow-md overflow-hidden">
        
        <nav class="flex-1 space-y-4 mt-4 text-gray-700 text-sm">
            <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-100">
                <span class="material-icons">bar_chart</span>
                <span class="ml-3 hidden group-hover:inline">Ventas</span>
            </a>
            <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-100">
                <span class="material-icons">inventory</span>
                <span class="ml-3 hidden group-hover:inline">Stock</span>
            </a>
            <a href="#" class="group flex items-center px-4 py-2 hover:bg-gray-100">
                <span class="material-icons">description</span>
                <span class="ml-3 hidden group-hover:inline">Facturas</span>
            </a>
        </nav>
        <a href="{{ route('logout') }}" class="flex items-center px-4 py-4 text-red-600 hover:bg-gray-100">
            <span class="material-icons">power_settings_new</span>
            <span class="ml-3 hidden group-hover:inline">Salir</span>
        </a>
    </aside>

    <!-- Main content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</body>
</html>
