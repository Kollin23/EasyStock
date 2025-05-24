<aside id="sidebar" class="group flex flex-col w-16 hover:w-56 transition-all duration-300 bg-white border-r shadow-md overflow-hidden">
    <div class="flex items-center justify-center h-16">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/logo_pequenyo.png') }}" alt="Logo Pequeño">
        </a>
    </div>

    <nav class="flex-1 space-y-6 mt-6 text-base">
        <a href="{{ route('invoices.index') }}" class="group/item flex items-center px-4 py-2 transition-all hover:text-[#1F5EA8]">
            <div class="relative h-8 w-8">
                <img src="{{ asset('images/Combo Chart.png') }}" alt="Ventas" class="absolute inset-0 group-hover/item:hidden">
                <img src="{{ asset('images/Combo Chart_2.png') }}" alt="Ventas Azul" class="absolute inset-0 hidden group-hover/item:block">
            </div>
            <span class="ml-3 hidden group-hover:inline group-hover/item:text-[#1F5EA8]">Ventas</span>
        </a>

        <a href="{{ route('products.index') }}" class="group/item flex items-center px-4 py-2 transition-all hover:text-[#1F5EA8]">
            <div class="relative h-8 w-8">
                <img src="{{ asset('images/Open Box.png') }}" alt="Stock" class="absolute inset-0 group-hover/item:hidden">
                <img src="{{ asset('images/Open Box_2.png') }}" alt="Stock Azul" class="absolute inset-0 hidden group-hover/item:block">
            </div>
            <span class="ml-3 hidden group-hover:inline group-hover/item:text-[#1F5EA8]">Stock</span>
        </a>

        <a href="{{ route('invoices.invoices') }}" class="group/item flex items-center px-4 py-2 transition-all hover:text-[#1F5EA8]">
            <div class="relative h-8 w-8">
                <img src="{{ asset('images/Purchase Order.png') }}" alt="Facturas" class="absolute inset-0 group-hover/item:hidden">
                <img src="{{ asset('images/Purchase Order_2.png') }}" alt="Facturas Azul" class="absolute inset-0 hidden group-hover/item:block">
            </div>
            <span class="ml-3 hidden group-hover:inline group-hover/item:text-[#1F5EA8]">Facturas</span>
        </a>
    </nav>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="group/item flex items-center px-4 py-4 w-full text-left transition-all hover:text-[#941B12]">
            <div class="relative h-8 w-8">
                <img src="{{ asset('images/Shutdown.png') }}" alt="Salir" class="absolute inset-0 group-hover/item:hidden">
                <img src="{{ asset('images/Shutdown_2.png') }}" alt="Salir" class="absolute inset-0 hidden group-hover/item:block">
            </div>
            <span class="ml-3 hidden group-hover:inline group-hover/item:text-[#941B12] text-base font-bold">Salir</span>
        </button>
    </form>
</aside>
