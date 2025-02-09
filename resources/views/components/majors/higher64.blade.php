@php
    $data = [
        'วิชาบริหารธุรกิจ' => [
            'การจัดการธุรกิจ' => ['การจัดการธุรกิจ'],
            'เทคโนโลยีธุรกิจดิจิทัล' => ['ธุรกิจดิจิทัล'],
            'การจัดการ' => ['การจัดการ'],
        ],
        'วิชาคหกรรม' => [
            'ธุรกิจคหกรรม' => ['ธุรกิจคหกรรม'],
            'อาหารและโภชนาการ' => ['อาหารและโภชนาการ'],
        ],
        'วิชาอุตสาหกรรมท่องเที่ยว' => [
            'การโรงแรม' => ['การโรงแรม', 'บริการอาหารและเครื่องดื่ม'],
            'การท่องเที่ยว' => ['การท่องเที่ยว'],
        ],
        'วิชาอุตสาหกรรมโลจิสติกส์' => [
            'การจัดการโลจิสติกส์และซัพพลายเชน' => ['การจัดการโลจิสติกส์และซัพพลายเชน'],
        ],
        'วิชาอุตสาหกรรมอาหาร' => [
            'อาหารและโภชนาการ' => ['อาหารและโภชนาการ'],
        ],
        'วิชาศิลปกรรมและเศรษฐกิจสร้างสรรค์' => [
            'ดิจิทัลกราฟิก' => ['ดิจิทัลกราฟิก'],
        ],
        'วิชาศิลปกรรม' => [
            'ดิจิทัลกราฟิก' => ['ดิจิทัลกราฟิก'],
        ],
        'วิชาอุตสาหกรรมแฟชั่นและสิ่งทอ' => [
            'เทคโนโลยีแฟชั่นและเครื่องแต่งกาย' => ['เทคโนโลยีแฟชั่นและเครื่องแต่งกาย'],
        ],
        'วิชาอุตสาหกรรมดิจิทัลและเทคโนโลยีสารสนเทศ' => [
            'เทคโนโลยีธุรกิจดิจิทัล' => ['เทคโนโลยีธุรกิจดิจิทัล'],
        ],
    ];
@endphp
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
    <header class="border-b pb-1 flex items-center space-x-2">
        <h2 class="font-bold text-xl">{{ __('majors.higher64') }}</h2>
    </header>
    <article class="py-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
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
