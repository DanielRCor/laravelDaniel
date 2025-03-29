<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sporting Cristal</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
                @layer theme {
                    :root, :host {
                        --color-primary: #0047AB; /* Azul Cristal */
                        --color-secondary: #FFFFFF; /* Blanco */
                        --color-accent: #FFD700; /* Dorado */
                        --color-dark: #0a0a0a;
                        --color-light: #f8f9fa;
                        --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                        /* Resto de variables... */
                    }
                }
                
                @layer utilities {
                    .bg-primary { background-color: var(--color-primary) }
                    .bg-secondary { background-color: var(--color-secondary) }
                    .text-primary { color: var(--color-primary) }
                    .text-secondary { color: var(--color-secondary) }
                    .border-primary { border-color: var(--color-primary) }
                    
                    /* Animaciones y estilos base se mantienen igual */
                    .transition-all { transition-property: all; transition-timing-function: cubic-bezier(.4,0,.2,1); transition-duration: .15s }
                    .starting\:opacity-0 { opacity: 0 }
                    /* Resto de utilidades... */
                }
            </style>
        @endif
    </head>
    <body class="bg-[#f8f9fa] dark:bg-[#0a0a0a] text-[#1a1a1a] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-white border-primary hover:bg-primary hover:text-white border text-primary dark:border-white rounded-sm text-sm leading-normal"
                        >
                            Panel
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-white text-primary border border-transparent hover:border-primary dark:hover:border-white rounded-sm text-sm leading-normal"
                        >
                            Iniciar Sesión
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-white border-primary hover:bg-primary hover:text-white border text-primary dark:border-white rounded-sm text-sm leading-normal">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-white shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                    <h1 class="mb-1 font-medium">¡Bienvenido a Sporting Cristal!</h1>
                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">El club más grande del Perú. <br>Comienza tu experiencia celeste:</p>
                    <ul class="flex flex-col mb-4 lg:mb-6">
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#0047AB] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Próximos
                                <a href="#" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-primary dark:text-[#FFD700] ml-1">
                                    <span>Partidos</span>
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5">
                                        <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#0047AB] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Conoce nuestra
                                <a href="#" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-primary dark:text-[#FFD700] ml-1">
                                    <span>Historia</span>
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5">
                                        <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square"/>
                                    </svg>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <ul class="flex gap-3 text-sm leading-normal">
                        <li>
                            <a href="#" target="_blank" class="inline-block bg-primary hover:bg-[#003580] border-primary text-white px-5 py-1.5 rounded-sm border text-sm leading-normal transition-all">
                                Hazte Socio
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="inline-block bg-white hover:bg-gray-100 border border-[#e3e3e0] text-primary px-5 py-1.5 rounded-sm text-sm leading-normal transition-all">
                                Tienda Oficial
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-gradient-to-b from-[#0047AB] to-[#003580] dark:from-[#002255] dark:to-[#001538] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden flex items-center justify-center">
                    <!-- Imagen del escudo de Sporting Cristal -->
                    <img 
                        src="https://imgmedia.larepublica.pe/640x371/larepublica/original/2025/01/07/677d83a6dc93420f8f5fdf40.webp" 
                        alt="Escudo de Sporting Cristal"
                        class="w-64 h-64 object-contain transition-all duration-750 starting:opacity-0 starting:translate-y-6"
                        style="filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.25))"
                    >
                    
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(255,255,255,0.1)]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>