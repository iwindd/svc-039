<nav 
    x-data="{ open: false, isSticky: false }" 
    x-init="window.addEventListener('scroll', () => { isSticky = window.scrollY > 0; })" 
    :class="{'shadow-lg': isSticky}" 
    class="bg-white border-b border-gray-100 sticky top-0 z-50 transition-shadow duration-300"
>
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex justify-between w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('navbar.home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('executives')" :active="request()->routeIs('executives')">
                        {{ __('navbar.executives') }}
                    </x-nav-link>
                    <x-nav-link :href="route('teachers')" :active="request()->routeIs('teachers')">
                        {{ __('navbar.teachers') }}
                    </x-nav-link>
                    <x-nav-link :href="route('students')" :active="request()->routeIs('students')">
                        {{ __('navbar.students') }}
                    </x-nav-link>
                    <x-nav-link :href="route('majors')" :active="request()->routeIs('majors')">
                        {{ __('navbar.majors') }}
                    </x-nav-link>
                </div>
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="sm:hidden transition-all duration-300 ease-out transform" x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('navbar.home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('executives')" :active="request()->routeIs('executives')">
                {{ __('navbar.executives') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('teachers')" :active="request()->routeIs('teachers')">
                {{ __('navbar.teachers') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('students')" :active="request()->routeIs('students')">
                {{ __('navbar.students') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('majors')" :active="request()->routeIs('majors')">
                {{ __('navbar.majors') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
