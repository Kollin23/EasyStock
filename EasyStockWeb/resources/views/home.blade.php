<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyStock</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-black font-sans">

    <!-- Navbar -->
    <header class="flex items-center justify-between px-6 py-4 border-b">
        <!-- Logo -->
        <div class="text-2xl">
            <a href=""><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        </div>

        <!-- Centro -->
        <nav class="md:flex space-x-6">
            <a href="#caracteristicas" class="hover:underline">Características</a>
            <a href="#planes" class="hover:underline">Planes</a>
            <a href="#contacto" class="hover:underline">Contacto</a>
        </nav>

        <!-- Botones derecha -->
        <div class="flex items-center space-x-6">
            <a href="{{ route('login') }}" class="hover:underline">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Regístrate</a>
        </div>
    </header>

    <!-- Hero principal -->
    <section class="text-center px-4 py-12 max-w-3xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Gestión de inventario y más.</h1>
        <p class="text-gray-700 mb-8">
            EasyStock es la plataforma en la nube que te ayuda a controlar tu stock, 
            automatizar la facturación y tener el control total de tu negocio en un solo lugar.
        </p>
        <img src="{{ asset('images/graficos_easystock.png') }}" alt="Estadísticas del sistema" class="mx-auto w-full max-w-xl">
    </section>

    <!-- Características -->
    <section id="caracteristicas" class="bg-gray-50 py-12 px-4">
        <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-6 text-center">
            <div class="p-4 border rounded"><br><strong>Control de inventario</strong><br>Consulta el stock en tiempo real.</div>
            <div class="p-4 border rounded"><br><strong>Estadísticas visuales</strong><br>Gráficos intuitivos sobre ventas e ingresos.</div>
            <div class="p-4 border rounded"><br><strong>Facturación automática</strong><br>Crea facturas profesionales en PDF.</div>
            <div class="p-4 border rounded"><br><strong>Venta por lotes</strong><br>Agrupa productos y véndelos juntos.</div>
            <div class="p-4 border rounded"><br><strong>Accede desde cualquier lugar</strong><br>Conéctate desde cualquier dispositivo.</div>
        </div>
    </section>

    <!-- Planes -->
    <section id="planes" class="bg-blue-600 text-white py-12 px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Planes</h2>
        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-6">
            <div class="bg-white text-black p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Plan Básico</h3>
                <p class="mb-4">0 €/mes – Gratis para siempre</p>
                <ul class="list-disc pl-5 text-sm space-y-1">
                    <li>Hasta 50 productos</li>
                    <li>Facturas en PDF</li>
                    <li>Estadísticas básicas</li>
                    <li>Acceso desde cualquier lugar</li>
                    <li>Soporte por correo electrónico</li>
                </ul>
            </div>
            <div class="bg-white text-black p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Plan Profesional</h3>
                <p class="mb-4">19,99 €/mes o 199 €/año <span class="text-green-600">(ahorras 2 meses)</span></p>
                <ul class="list-disc pl-5 text-sm space-y-1">
                    <li>Productos ilimitados</li>
                    <li>Facturación automática</li>
                    <li>Estadísticas avanzadas</li>
                    <li>Gestión de lotes</li>
                    <li>Soporte prioritario por chat y correo</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <!-- <section id="contacto" class="py-12 px-4 text-center">
        <h2 class="text-2xl font-bold mb-4">Contacto</h2>
        <p class="text-gray-700">¿Tienes preguntas? Escríbenos a <a href="mailto:soporte@easystock.com" class="text-blue-600 underline">soporte@easystock.com</a></p>
    </section> -->

</body>
</html>
