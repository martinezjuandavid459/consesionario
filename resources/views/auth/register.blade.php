<x-guest-layout>

<style>
.input-group{ position: relative; }

.input-icon{
    position:absolute;
    top:50%;
    left:10px;
    transform:translateY(-50%);
    color:#888;
}

.input-dark{
    background:#111;
    border:1px solid #333;
    color:white;
    padding-left:35px;
}

.input-dark:focus{
    border-color:#ff8800;
    box-shadow:0 0 8px rgba(255,136,0,0.5);
}

.btn-pro{
    background: linear-gradient(45deg,#ff3c00,#ff8800);
    border:none;
    color:white;
    padding:10px;
    border-radius:25px;
    width:100%;
    transition:0.3s;
}

.btn-pro:hover{
    box-shadow:0 0 15px rgba(255,120,0,0.8);
    transform:scale(1.03);
}
</style>

<div>

    <h2 class="text-orange-400 text-center text-xl mb-4">
        Crear Cuenta
    </h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- NOMBRE -->
        <div class="input-group mb-3">
            <span class="input-icon">👤</span>

            <x-text-input 
                name="name"
                :value="old('name')"
                required
                class="w-full input-dark"
                placeholder="Nombre"
            />

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- EMAIL -->
        <div class="input-group mb-3">
            <span class="input-icon">📧</span>

            <x-text-input 
                name="email"
                type="email"
                :value="old('email')"
                required
                class="w-full input-dark"
                placeholder="Correo"
            />

            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- PASSWORD -->
        <div class="input-group mb-3">
            <span class="input-icon">🔒</span>

            <x-text-input 
                id="password"
                type="password"
                name="password"
                required
                class="w-full input-dark"
                placeholder="Contraseña"
            />
        </div>

        <!-- CONFIRM -->
        <div class="input-group mb-3">
            <span class="input-icon">🔒</span>

            <x-text-input 
                type="password"
                name="password_confirmation"
                required
                class="w-full input-dark"
                placeholder="Confirmar contraseña"
            />

            <x-input-error :messages="$errors->get('password')" />
        </div>

        <button class="btn-pro">
            REGISTRARSE
        </button>

        <div class="text-center mt-3 text-sm">
            <a href="{{ route('login') }}">
                ¿Ya tienes cuenta?
            </a>
        </div>

    </form>
</div>

</x-guest-layout>