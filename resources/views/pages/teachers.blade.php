<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('teachers.header') }}
        </h2>
    </x-slot>

    <div class="py-12 grid grid-cols-2 gap-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-teachers.chart />
        <x-teachers.table1 />
        <x-teachers.table2 />
    </div>
</x-app-layout>
