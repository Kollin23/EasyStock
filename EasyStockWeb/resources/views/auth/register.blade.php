@vite('resources/css/app.css')

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Logo -->
<div class="logo-container pt-6">
    <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
</div>

<!-- Formulario -->
<div class="form-container">
    <h2 class="form-title">REGÍSTRATE</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre -->
        <div class="input-group">
        <x-text-input id="nombre" class="text-input" type="text" name="name" required autofocus autocomplete="username" placeholder=" " />
        <x-input-label for="name" class="input-label" :value="__('Nombre')" />
        </div>

        <!-- Teléfono -->
        <div class="input-group">
        <x-text-input id="telefono" class="text-input" type="text" name="phone" required autofocus autocomplete="telefono" placeholder=" " />
        <x-input-label for="phone" class="input-label" :value="__('Teléfono')" />
        </div>

        <!-- Correo Electrónico -->
        <div class="input-group">
        <x-text-input id="email" class="text-input" type="email" name="email" required autofocus autocomplete="username" placeholder=" " />
        <x-input-label for="email" class="input-label" :value="__('Correo electrónico')" />
        </div>

        <!-- Contraseña -->
        <div class="input-group">
        <button type="button" id="togglePassword">
            <img src="{{asset('images/contraseña/cerrar-ojo.png')}}" alt="Ver contraseña" id="eyeIcon" style="width:20px;">
        </button> 
        <x-text-input id="password" class="text-input" type="password" name="password" required autofocus autocomplete="password" placeholder=" " />
        <x-input-label for="password" class="input-label" :value="__('Contraseña')" />
        </div>

        <!-- Confirmar Contraseña -->
        <div class="input-group">
        <button type="button" id="togglePassword2">
            <img src="{{asset('images/contraseña/cerrar-ojo.png')}}" alt="Ver contraseña" id="eyeIcon2" style="width:20px;">
        </button>
        <x-text-input id="password2" class="text-input" type="password" name="password_confirmation" required autofocus autocomplete="new-password" placeholder=" " />
        <x-input-label for="password_confirmation" class="input-label" :value="__('Repetir Contraseña')" />
        </div>

        <div id="password-error" style="color: red; display: none; font-weight: bold; margin-bottom: 10px;">
            Las contraseñas no coinciden.
        </div>

        @error('email')
            <div style="color: red; font-weight: bold; margin-bottom: 10px;">{{ $message }}</div>
        @enderror

        <!-- Botón de Registro -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="button-primary">
                {{ __('CREAR CUENTA') }}
            </x-primary-button>
        </div>
    </form>
    <!-- Footer -->
    <footer class="footer">
        <a href="#">Cookies</a>
        <a href="#">Términos y condiciones</a>
        <a href="#">Contáctanos</a>
    </footer>
</div>  

@vite('resources/js/app.js')