<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>MSU-IIT NMPC | News & Updates</title>

        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            alpha: "#335DA1",
                            beta: "#9C0B0F",
                            charlie:  "#3C424F",
                        },
                    },
                },
            };
        </script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/">
                <div class="flex items-center">
                  <img class="w-24" src="{{asset('images/nmpc_logo.png')}}" alt="" class="logo">
                  <div class="ml-4">
                    <div class="text-lg font-extrabold text-alpha leading-[1rem]">MSU-IIT NATIONAL</div>
                    <div class="text-lg font-extrabold text-alpha leading-[1rem]">MULTI-PURPOSE COOPERATIVE</div>
                    <div class="text-base font-normal text-red-500 leading-relaxed">Join us, Grow with us!</div>
                  </div>
                </div>
            </a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                    <a href="/news/manage" class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150"><i class="fa-solid fa-gear"></i> Manage News Archive</a>
                </li>
                <li>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150 text-alpha">
                                <div>Welcome {{auth()->user()->username}}! </div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </li>
                @else
                <li>
                    <a href="/login" class="inline-flex items-center px-3 py-2 border border-transparent text-base leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150"
                        ><i class="fa-solid fa-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                <li>
                    <a href="/register" class="inline-flex items-center px-3 py-2 border border-transparent text-base leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                @endauth
            </ul>
        </nav>
        <main>
            @yield('content')
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
        </main>
        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-charlie text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

            <a
                href="/news/create"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Post News</a
            >
        </footer>

        <x-flash-message/>
    </body>
</html>