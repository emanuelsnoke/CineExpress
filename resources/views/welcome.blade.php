<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="css/index.css">
        <link rel="shortcut icon" type="imagex/png" href="img/icon.png">
        <title>CineExpress</title>
        <link rel="stylesheet" href="Css/main.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>body{background-color: black;}</style>
    <body>
        <header class="menu-principal">
            <main>
                <div class="menu">
                  <ul>
                    <li2><a href="">CineExpress</a></li2>
                    <li><a href="">Em Cartas</a></li>
                    <li><a href="EmBreve">Em Breve</a></li>
                    <li><a href="">Cinemas</a></li>

                  </ul>
            <div class="Filmes">
                <li><a href="DemonSlayer"><img width="250" src="img/cartaz.jpg" alt=""></a></li>
                <li><a href="MadameTeia"><img width="250" src="img/cartazMadameTeia.jpeg" alt=""></a></li>
                <li><a href="O-Mal-Que-Habita-Em-Nos"><img width="250" src="img/o-mal-que-nos-habita-poster-desktop-5633c.jpg" alt=""></a></li>
            </div>

            <div class="login">
                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        {{ auth()->user()->name }}
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Login
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Cadastro
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                            @endif
                </div>
        </div>
    </body>
</html>
