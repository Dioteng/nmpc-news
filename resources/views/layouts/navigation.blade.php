<nav class="flex justify-between items-center mb-0 bg-alpha h-24">
    <a href="/">
        <div class="flex items-center">
          <img class="md:w-44 w-24" src="{{asset('images/nmpc_logo.png')}}" alt="" class="logo">
          <div class="hidden md:block">
            <div class="md:text-lg text-xs font-semibold md:font-bold text-white leading-relaxed">MSU-IIT NATIONAL</div>
            <div class="md:text-lg text-xs font-semibold md:font-bold text-white leading-[1rem]">MULTI-PURPOSE COOPERATIVE</div>
            <div class="md:text-base text-xs font-medium text-beta leading-relaxed">Join us, Grow with us!</div>
          </div>
        </div>
    </a>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth
            @if (auth()->user()->roles == 'admin')
                <li>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150 text-white">
                                <div><i class="fa-solid fa-user-gear"></i>  Admin Dashboard</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="/news/manage">
                                {{ __('Manage News') }}
                            </x-dropdown-link>
    
                            <x-dropdown-link href="/admin/dashboard">
                                {{ __('Manage Comments') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </li>
            @endif
        <li>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent md:text-lg text-xs leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150 text-white">
                        <div>Welcome {{auth()->user()->name}}! </div>

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
            <a href="/login" class="inline-flex items-center md:px-3 md:py-2 border border-transparent text-white leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150 md:text-2xl text-sm"><i class="fa-solid fa-right-to-bracket"></i> Login</a
            >
        </li>
        <li>
            <a href="/register" class="inline-flex items-center md:px-3 md:py-2 border border-transparent text-white leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150 md:text-2xl text-sm"><i class="fa-solid fa-user-plus"></i> Register</a
            >
        </li>
        @endauth
    </ul>
</nav>