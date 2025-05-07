<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EasyStock Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen flex">
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</body>
</html>
