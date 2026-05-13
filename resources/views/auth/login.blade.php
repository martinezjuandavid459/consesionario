<x-guest-layout>

<style>
.input-group{
    position: relative;
}

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

/* botón */
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

/* ojo */
.toggle-password{
    position:absolute;
    right:10px;
    top:50%;
    transform:translateY(-50%);
    cursor:pointer;
    color:#aaa;
}
</style>

<div>

    <h2 class="text-orange-400 text-center text-xl mb-4">
        Iniciar Sesión
    </h2>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- EMAIL -->
        <div class="input-group mb-3">
            <span class="input-icon">📧</span>

            <x-text-input 
                id="email"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                class="w-full input-dark"
                placeholder="Correo electrónico"
            />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
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

            <span class="toggle-password" onclick="togglePassword()">👁️</span>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- REMEMBER -->
        <div class="mb-3">
            <label class="text-sm">
                <input type="checkbox" name="remember"> Recordarme
            </label>
        </div>

        <!-- BOTÓN -->
        <button class="btn-pro">
            INGRESAR
        </button>

        <div class="flex justify-between mt-3 text-sm">

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif

            <a href="{{ route('register') }}">
                Registrarse
            </a>

        </div>

    </form>
</div>

<script>
function togglePassword(){
    let input = document.getElementById("password");
    input.type = input.type === "password" ? "text" : "password";
}
</script>

</x-guest-layout>