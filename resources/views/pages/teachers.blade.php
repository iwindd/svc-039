@php
    $teachers = [
        [
            'name' => 'นางสาวณัฐเกศ เรืองทอง',
            'position' => 'หัวหน้างานบุคลากร',
            'phone' => '109',
            'image' => 'images/teachers/1.jpg',
        ],
        [
            'name' => 'นางอภิญญา กีรติสุวคนธ์',
            'position' => 'ผู้ช่วยงานบุคลากร',
            'phone' => '109',
            'image' => 'images/teachers/2.jpg',
        ],
        [
            'name' => 'นางสาวจันทิมา ช่วยพิทักษ์',
            'position' => 'ผู้ช่วยงานบุคลากร',
            'phone' => '109',
            'image' => 'images/teachers/3.jpg',
        ],
        [
            'name' => 'นางสาวนฤมล โสภา',
            'position' => 'ผู้ช่วยงานบุคลากร',
            'phone' => '109',
            'image' => 'images/teachers/4.jpg',
        ],
        [
            'name' => 'นางนารีรัตน์ ประดิษฐ์สาร',
            'position' => 'ผู้ช่วยงานบุคลากร',
            'phone' => '109',
            'image' => 'images/teachers/5.jpg',
        ],
        [
            'name' => 'นางชนันณัตถ์ สมิงชัย',
            'position' => 'ผู้ช่วยงานบุคลากร',
            'phone' => '109',
            'image' => 'images/teachers/6.jpg',
        ],
        [
            'name' => 'นางสาวอุไรวรรณ ชำนาญกิจ',
            'position' => 'ผู้ช่วยงานบุคลากร',
            'phone' => '109',
            'image' => 'images/teachers/7.jpg',
        ],
        [
            'name' => 'นางสาวกมลทิพย์ เฮ่งศิริ',
            'position' => 'ผู้ช่วยงานบุคลากร',
            'phone' => '109',
            'image' => 'images/teachers/8.jpg',
        ],
        [
            'name' => 'สิบเอกศิริราช กรีไกรนุช',
            'position' => 'ผู้ช่วยงานบุคลากร',
            'phone' => '109',
            'image' => 'images/teachers/9.jpg',
        ],
        [
            'name' => 'นางสาวมาลินี จาริ',
            'position' => 'ผู้ช่วยงานบุคลากร',
            'phone' => '109',
            'image' => 'images/teachers/10.jpg',
        ],
    ];
@endphp

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
