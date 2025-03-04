<x-app-layout>
    <div class="py-12 space-y-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <x-home.carousel />
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2 grid lg:grid-cols-4 md:grid-cols-1 gap-5">
            <a href="{{ route('executives') }}">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100 cursor-pointer border-b-4 border-primary-300 hover:translate-y-1 transform transition duration-300">
                    <div class="flex space-x-4 p-3 items-center justify-between">
                        <x-ionicon-school-outline class="w-14 h-14 text-gray-500" />
                        <h2 class="text-xl">{{ __('navbar.executives2') }}</h2>
                        <x-ionicon-chevron-forward-outline class="w-6 h-6 text-gray-500" />
                    </div>
                </div>
            </a>
            <a href="{{ route('teachers') }}">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100 cursor-pointer border-b-4 border-primary-300 hover:translate-y-1 transform transition duration-300">
                    <div class="flex space-x-4 p-3 items-center justify-between">
                        <x-ionicon-people-outline class="w-14 h-14 text-gray-500" />
                        <h2 class="text-xl">{{ __('navbar.teachers2') }}</h2>
                        <x-ionicon-chevron-forward-outline class="w-6 h-6 text-gray-500" />
                    </div>
                </div>
            </a>
            <a href="{{ route('students') }}">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100 cursor-pointer border-b-4 border-primary-300 hover:translate-y-1 transform transition duration-300">
                    <div class="flex space-x-4 p-3 items-center justify-between">
                        <x-ionicon-accessibility-outline class="w-14 h-14 text-gray-500" />
                        <h2 class="text-xl">{{ __('navbar.students2') }}</h2>
                        <x-ionicon-chevron-forward-outline class="w-6 h-6 text-gray-500" />
                    </div>
                </div>
            </a>
            <a href="{{ route('majors') }}">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100 cursor-pointer border-b-4 border-primary-300 hover:translate-y-1 transform transition duration-300">
                    <div class="flex space-x-4 p-3 items-center justify-between">
                        <x-ionicon-pricetags-outline class="w-14 h-14 text-gray-500" />
                        <h2 class="text-xl">{{ __('navbar.majors2') }}</h2>
                        <x-ionicon-chevron-forward-outline class="w-6 h-6 text-gray-500" />
                    </div>
                </div>
            </a>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <header class="p-4 border-b">
                    <img src="{{asset("images/home/verse/header.png")}}" alt="verse header">
                </header>
                <article class="p-8 flex justify-center">
                    <img src="{{asset("images/home/verse/description.gif")}}" alt="verse content">
                </article>
            </div>
        </div>
    </div>
</x-app-layout>
