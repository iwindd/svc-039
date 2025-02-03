<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
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
            </div>
        </div>
    </div>
</nav>
