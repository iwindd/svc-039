<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('majors.header') }}
        </h2>
    </x-slot>

    <div class="py-12 gap-2 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-5">
        <x-majors.normal64 />
        <x-majors.higher67 />
        <x-majors.higher64 />
        <x-majors.higher67_2 />
    </div>
</x-app-layout>
