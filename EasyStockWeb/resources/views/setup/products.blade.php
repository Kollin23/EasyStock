<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />
@vite('resources/css/app.css')

<div class="flex justify-center mt-6">
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16">
    </a>
</div>

<div class="max-w-2xl mx-auto py-10 px-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Añade tus productos</h2>

    <form method="POST" action="{{ route('setup.products.store') }}" class="space-y-6">
        @csrf

        <div id="products-container" class="space-y-6">
            <div class="p-4 bg-gray-50 border border-blue-200 rounded-xl shadow-sm">
                <div class="space-y-4">
                    <input type="text" name="products[0][name]" placeholder="Nombre del producto"
                        class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    
                    <input type="text" name="products[0][description]" placeholder="Descripción del producto"
                        class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    
                    <input type="number" name="products[0][stock]" placeholder="Stock disponible"
                        class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    
                    <input type="number" name="products[0][price]" placeholder="Precio" step="0.01"
                        class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>
        </div>

        <div class="flex justify-between items-center">
            <button type="button" onclick="addProduct()" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold px-5 py-2 rounded-lg transition">
                Añadir otro producto
            </button>

            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition">
                Guardar y continuar
            </button>
        </div>
    </form>
</div>

<script>
    let productIndex = 1;

    function addProduct() {
        const container = document.getElementById('products-container');
        const html = `
            <div class="p-6 bg-gray-50 border border-blue-200 rounded-xl shadow-sm">
                <div class="space-y-4">
                    <input type="text" name="products[${productIndex}][name]" placeholder="Nombre del producto"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    
                    <input type="text" name="products[${productIndex}][description]" placeholder="Descripción del producto"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    
                    <input type="number" name="products[${productIndex}][stock]" placeholder="Stock disponible"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    
                    <input type="number" name="products[${productIndex}][price]" placeholder="Precio" step="0.01"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
        productIndex++;
    }
</script>
