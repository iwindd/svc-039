@php
    $executives = [
        [
            'name' => 'นายพงษ์ศักดิ์ นุ้ยเจริญ',
            'position' => 'ผู้อำนวยการวิทยาลัยอาชีวศึกษาสุราษฎร์ธานี',
            'education' => 'ค.บ.(อุตสาหกรรมศิลป์) ค.ม.(การบริหารการศึกษา)',
            'standing' => 'ผู้อำนวยการชำนาญการพิเศษ',
            'phone' => '102',
            'image' => 'images/executives/1.jpg',
        ],
        [
            'name' => 'นายประเสริฐ ทองสาลี',
            'position' => 'รองผู้อำนวยการวิทยาลัย ฝ่ายบริหารทรัพยากร',
            'education' => 'ศษ.ม (การบริหารการศึกษา)',
            'standing' => 'รองผู้อำนวยการชำนาญการพิเศษ',
            'phone' => '105',
            'image' => 'images/executives/2.jpg',
        ],
        [
            'name' => 'นางสาวสุธาสินี คงทอง',
            'position' => 'รองผู้อำนวยการวิทยาลัย ฝ่ายพัฒนากิจการนักเรียนนักศึกษา',
            'education' => 'ปร.ด. (การบริหารการศึกษา) กศ.ม. (อุตสาหกรรมศึกษา)',
            'standing' => 'รองผู้อำนวยการชำนาญการ',
            'phone' => '114',
            'image' => 'images/executives/3.jpg',
        ],
        [
            'name' => 'นายจักรี เชิดชู',
            'position' => 'รองผู้อำนวยการวิทยาลัย ฝ่ายวิชาการ',
            'education' => 'วท.บ. (วิทยาการคอมพิวเตอร์) ค.ม. (พุทธบริหารการศึกษา)',
            'standing' => 'รองผู้อำนวยการชำนาญการพิเศษ',
            'phone' => '104',
            'image' => 'images/executives/4.jpg',
        ],
        [
            'name' => 'นางสาววิภาพร ยอดอุดม',
            'position' => 'รองผู้อำนวยการวิทยาลัย ฝ่ายแผนงานและความร่วมมือ',
            'education' => 'ค.บ. (สังคมศึกษา) คษ.ม. (การบริหารการศึกษา)',
            'standing' => 'รองผู้อำนวยการชำนาญการ',
            'phone' => '111',
            'image' => 'images/executives/5.png',
        ],
    ];
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('executives.header') }}
        </h2>
    </x-slot>

    <div class="py-12 space-y-5">
        @foreach ($executives as $executive)
            <x-executives.card
                name="{{ $executive['name'] }}"
                position="{{ $executive['position'] }}"
                education="{{ $executive['education'] }}"
                standing="{{ $executive['standing'] }}"
                phone="{{ $executive['phone'] }}"
                image="{{ $executive['image'] }}"
            />
        @endforeach
    </div>
</x-app-layout>
