@php
    $data = [
        'ประเภทวิชาบริหารธุรกิจ' => [
            'สาขาวิชาการบัญชี' => ['สาขางานการบัญชี'],
        ],
        'ประเภทวิชาอุตสาหกรรมท่องเที่ยว' => [
            'สาขาวิชาการโรงแรม' => ['สาขางานการโรงแรม'],
            'สาขาวิชาการท่องเที่ยว' => ['สาขางานการท่องเที่ยว'],
        ],
        'ประเภทวิชาอุตสาหกรรมโลจิสติกส์' => [
            'สาขาวิชาการจัดการโลจิสติกส์และซัพพลายเชน' => ['สาขางานการจัดการโลจิสติกส์และซัพพลายเชน'],
        ],
        'ประเภทวิชาอุตสาหกรรมอาหาร' => [
            'สาขาวิชาอาหารและโภชนาการ' => ['สาขางานอาหารและโภชนาการ'],
            'สาขาวิชาเชฟอาหารไทย' => ['สาขางานเชฟอาหารไทย'],
        ],
        'ประเภทวิชาอุตสาหกรรมแฟชั่นและสิ่งทอ' => [
            'สาขาวิชาเทคโนโลยีแฟชั่นและเครื่องแต่งกาย' => ['สาขางานเทคโนโลยีแฟชั่นและเครื่องแต่งกาย'],
        ],
        'ประเภทวิชาอุตสาหกรรมดิจิทัลและเทคโนโลยีสารสนเทศ' => [
            'สาขาวิชาเทคโนโลยีธุรกิจดิจิทัล' => ['สาขางานเทคโนโลยีธุรกิจดิจิทัล'],
        ],
    ];
@endphp
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
    <header class="border-b pb-1 flex items-center space-x-2">
        <h2 class="font-bold text-xl">{{ __('majors.higher67') }}</h2>
    </header>
    <article class="py-2 grid grid-cols-2 gap-6">
        @foreach ($data as $type => $majors)
            <section class="space-y-2">
                <header class="bg-primary-300 w-full p-2 rounded">
                    <h3 class="font-semibold text-lg ">{{ $type }}</h3>
                </header>
                <article class="px-2">
                    <ul class="space-y-2 ">
                        @foreach ($majors as $major => $branches)
                            <li>
                                <h4 class="font-semibold">{{ $major }}</h4>
                                <ul class="space-y-1 list-disc pl-6">
                                    @foreach ($branches as $branch)
                                        <li>{{ $branch }}</li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </article>
            </section>
        @endforeach
    </article>
</div>
