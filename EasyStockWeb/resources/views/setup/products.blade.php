<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Logo -->
<div class="logo-container">
    <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
</div>

    <div class="max-w-4xl mx-auto py-10">
        <h2 class="text-2xl font-bold mb-6">Añade tus productos</h2>

        <form method="POST" action="{{ route('setup.products.store') }}">
            @csrf

            <div id="products-container">
                <div class="mb-4 border p-4 rounded-lg bg-gray-100">
                    <input type="text" name="products[0][name]" placeholder="Nombre del producto" class="input mb-2 w-full" required>
                    <input type="text" name="products[0][description]" placeholder="Descipción del producto" class="input mb-2 w-full" required>
                    <input type="number" name="products[0][stock]" placeholder="Stock disponible" class="input mb-2 w-full" required>
                    <input type="number" name="products[0][price]" placeholder="Precio" class="input w-full" required>
                </div>
            </div>

            <button type="button" onclick="addProduct()" class="bg-blue-500 text-white px-4 py-2 rounded">Añadir otro producto</button>

            <div class="mt-6">
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded">Guardar y continuar</button>
            </div>
        </form>
    </div>

    <script>
        let productIndex = 1;
        function addProduct() {
            const container = document.getElementById('products-container');
            const html = `
                <div class="mb-4 border p-4 rounded-lg bg-gray-100">
                    <input type="text" name="products[${productIndex}][name]" placeholder="Nombre del producto" class="input mb-2 w-full" required>
                    <input type="text" name="products[${productIndex}][description]" placeholder="Descripción del producto" class="input mb-2 w-full" required>
                    <input type="number" name="products[${productIndex}][stock]" placeholder="Stock disponible" class="input mb-2 w-full" required>
                    <input type="number" name="products[${productIndex}][price]" placeholder="Precio" class="input w-full" required>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', html);
            productIndex++;
        }
    </script>

