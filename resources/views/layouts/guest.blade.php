<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Concesionario</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-sans antialiased">

    <div class="min-h-screen flex flex-col justify-center items-center">

        <!-- 🔥 TÍTULO -->
        <div class="text-center mb-5">

            <h1 style="
                background: linear-gradient(45deg,#ff3c00,#ff8800);
                -webkit-background-clip: text;
                color: transparent;
                font-size:34px;
                font-weight:bold;
            ">
                Concesionario 🚗
            </h1>

            <p style="color:#bbb; margin-top:5px;">
                Accede a tu cuenta
            </p>

        </div>

        <!-- 🔥 CARD -->
        <div class="w-full sm:max-w-md px-6 py-4 shadow-md"
             style="background:#1a1a1a; border-radius:15px;">

            {{ $slot }}

        </div>

    </div>

</body>
</html>