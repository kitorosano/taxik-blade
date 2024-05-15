<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenido a Taxik</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
      <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
        <div class="min-h-screen flex flex-col justify-between items-center bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <header class="w-full grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <div class="flex lg:justify-center lg:col-start-2">
                  <!-- LOGO TAXIK -->
                </div>
                @if (Route::has('login'))
                    <nav class="flex flex-1 justify-end">
                        @auth
                            <a
                                href="{{ route('dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </a>
                @else
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Entrar
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Registrarse
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <main class="max-w-2xl lg:max-w-7xl text-center">
                <p class="text-6xl py-44">Bienvenido a <span class="">Taxik</span></p>

                <form method="GET" action="{{ route('dashboard') }}">
                    <div>
                        <x-input-label for="location" :value="__('Ingresa tu localidad')" />
                        <x-text-input id="location" class="block mt-1 w-full" type="location" name="location" :value="old('location')" required autofocus autocomplete="location" />
                        <x-input-error :messages="$errors->get('location')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-3">
                            {{ __('Buscar Taxis') }}
                        </x-primary-button>
                    </div>
                </form>
            </main>

            <footer class="w-full py-16 text-center text-sm text-black dark:text-white/70">
                Desarrollado por estudiantes del TIP - UTEC © 2024
            </footer>
        </div>
    </body>
</html>
