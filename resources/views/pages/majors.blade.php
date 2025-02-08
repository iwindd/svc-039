<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('majors.header') }}
        </h2>
    </x-slot>

    <div class="py-12 gap-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-majors.normal64 />
    </div>
</x-app-layout>
