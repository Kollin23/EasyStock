<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyStock</title>
    @vite(['resources/css/app.css', 'resources/js/script.js'])
</head>
<body class="bg-white text-black font-sans">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 bg-white flex items-center justify-between px-6 py-4 border-b shadow-sm">
        <div class="">
            <a href=""><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        </div>

        <nav class="md:flex space-x-6">
            <a href="#caracteristicas" class="hover:underline">Características</a>
            <a href="#planes" class="hover:underline">Planes</a>
            <a href="#contacto" class="hover:underline">Contacto</a>
        </nav>

        <div class="flex items-center space-x-6">
            <a href="{{ route('login') }}" class="font-bold hover:underline">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="font-bold px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Regístrate</a>
        </div>
    </header>

    <!-- Principal -->
    <section class="text-center px-4 py-12 max-w-3xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Gestión de inventario y más.</h1>
        <p class="text-gray-700 mb-8">
            EasyStock es la plataforma en la nube que te ayuda a controlar tu stock, automatizar la facturación y tener el control total de tu negocio en un solo lugar.
        </p>
        <img src="{{ asset('images/graficos_easystock.png') }}" alt="Estadísticas del sistema" class="mx-auto w-full max-w-xl">
    </section>

    <!-- Características -->
    <section id="caracteristicas" class="py-12 px-4">
        <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-6 text-center">
            <div class="p-4 border-2 border-blue-500 rounded-lg"><strong>Control de inventario</strong><br>Consulta el stock en tiempo real y recibe avisos cuando haya poca cantidad.</div>
            <div class="p-4 border-2 border-blue-500 rounded-lg"><strong>Estadísticas visuales</strong><br>Gráficos de ventas, ingresos y productos más vendidos en un panel intuitivo.</div>
            <div class="p-4 border-2 border-blue-500 rounded-lg"><strong>Facturación automática</strong><br>Crea facturas profesionales en PDF de forma rápida y sin complicaciones.</div>
            <div class="p-4 border-2 border-blue-500 rounded-lg"><strong>Venta por lotes</strong><br>Agrupa productos y descuenta sus componentes al venderlos juntos.</div>
            <div class="p-4 border-2 border-blue-500 rounded-lg"><strong>Accede desde cualquier lugar</strong><br>Gestiona tu negocio desde cualquier dispositivo con conexión a Internet.</div>
        </div>
    </section>

    <!-- Planes -->
    <section id="planes" class="bg-blue-600 text-white py-12 px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Planes</h2>
        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-6">
            <div class="bg-white text-black p-6 rounded-lg shadow">
                <h3 class="text-2xl font-bold mb-2">Plan Básico</h3>
                <p class="mb-4 font-bold">0 €/mes - Gratis para siempre</p>
                <p class="mb-4">Ideal para autónomos o pequeños negocios que empiezan.</p>
                <p class="mb-2 font-bold text-xl">Incluye:</p>
                <ul class="list-disc pl-5 text-sm space-y-1">
                    <li>Hasta 50 productos</li>
                    <li>Facturación en PDF manual</li>
                    <li>Estadísticas básicas de ventas</li>
                    <li>Acceso desde cualquier lugar</li>
                    <li>Soporte por correo electrónico</li>
                </ul>
            </div>
            <div class="bg-white text-black p-6 rounded-lg shadow">
                <h3 class="text-2xl font-bold mb-2">Plan Profesional</h3>
                <p class="mb-4 font-bold">19,99 €/mes o 199 €/año <br> <span class="text-green-600">(ahorras 2 meses)</span></p>
                <p class="mb-4">Pensado para negocios en crecimiento que necesitan más control.</p>
                <p class="mb-2 font-bold text-xl">Incluye el Plan Básico<span class="text-blue-600">+</span>:</p>
                <ul class="list-disc pl-5 text-sm space-y-1">
                    <li>Inventario ilimitado</li>
                    <li>Facturación automática</li>
                    <li>Estadísticas avanzadas</li>
                    <li>Gestión de productos por lotes</li>
                    <li>Soporte prioritario por chat y correo</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <<section id="contacto" class="py-12 px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Contacto</h2>
        <p class="text-gray-700">¿Tienes preguntas? Escríbenos a <a href="mailto:easystockhelp@gmail.com" class="text-blue-600 underline">easystockhelp@gmail.com</a></p>
    </section>

</body>
</html>
