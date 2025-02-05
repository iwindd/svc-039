@props([
    'name' => '',
    'position' => '',
    'phone' => '',
    'image' => '',
])

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
    <header class="border-b pb-1 flex items-center space-x-2">
        <h2 class="font-bold text-xl">{{ $name }}</h2>
        <span class="text-xl">-</span>
        <p class="text-lg">{{ $position }}</p>
    </header>
    <article class="grid grid-cols-3 gap-2 mt-2">
        <div class="col-span-2 flex items-center px-5">
            <ul class="space-y-2">
                <li class="space-y-1">
                    <span class="font-bold bg-primary-100 p-1 px-2 rounded-sm">{{ __('teachers.card_name') }}</span>
                    <span class="block">{{ $name }}</span>
                </li>
                <li class="space-y-1">
                    <span class="font-bold bg-primary-100 p-1 px-2 rounded-sm">{{ __('teachers.card_position') }}</span>
                    <span class="block">{{ $position }}</span>
                </li>
                <li class="space-y-1">
                    <span class="font-bold bg-primary-100 p-1 px-2 rounded-sm">{{ __('teachers.card_phone') }}</span>
                    <span class="block">{{ $phone }}</span>
                </li>
            </ul>
        </div>
        <div class="flex justify-center items-center">
            <img src="{{ asset($image) }}" alt="{{ $name }}">
        </div>
    </article>
</div>
