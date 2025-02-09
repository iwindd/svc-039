@php
    $data = collect([
        __('common.commerce.caption') => [
            __('common.commerce.accounting') => [12, 135, 8, 112, 9, 114],
            __('common.commerce.marketing') => [9, 77, 7, 47, 6, 37],
            __('common.commerce.secretary') => [3, 21, 1, 25, 3, 31],
            __('common.commerce.it') => [0, 0, 34, 60, 36, 54],
        ],
        __('common.art.caption') => [
            __('common.art.art') => [0, 0, 12, 9, 3, 5],
            __('common.art.design') => [0, 0, 8, 15, 7, 4],
            __('common.art.graphic') => [0, 0, 40, 32, 37, 33],
        ],
        __('common.economics.caption') => [
            __('common.economics.business') => [8, 9, 3, 6, 6, 4],
            __('common.economics.fashion') => [0, 0, 1, 83, 3, 82],
            __('common.economics.food') => [0, 0, 43, 10, 23, 8],
        ],
        __('common.tourism.caption') => [
            __('common.tourism.hotel') => [15, 72, 5, 50, 5, 47],
            __('common.tourism.hotel_2') => [11, 25, 4, 11, 0, 12],
            __('common.tourism.travel') => [5, 29, 5, 26, 6, 24],
        ],
        __('common.food.caption') => [
            __('common.food.food') => [41, 82, 0, 0, 0, 0],
        ],
        __('common.art2.caption') => [
            __('common.art2.art') => [13, 7, 0, 0, 0, 0],
            __('common.art2.design') => [5, 18, 0, 0, 0, 0],
            __('common.art2.graphic') => [43, 35, 0, 0, 0, 0],
        ],
        __('common.fashion.caption') => [
            __('common.fashion.fashion') => [8, 11, 0, 0, 0, 0],
        ],
        __('common.it.caption') => [
            __('common.it.it') => [27, 7, 0, 0, 0, 0],
            __('common.it.business') => [46, 68, 0, 0, 0, 0],
        ],
        __('common.it2.caption') => [
            __('common.it2.it') => [0, 0, 28, 4, 20, 10],
        ],
    ]);
@endphp
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 col-span-2">
    <header class="border-b pb-1 flex items-center space-x-2">
        <h2 class="font-bold text-xl">{{ __('students.table1.caption') }}</h2>
    </header>
    <article class="py-2 overflow-y-auto">
        <table class="table-custom">
            <thead>
                <tr>
                    <th>
                        <p>{{ __('students.table1.type') }}</p>
                    </th>
                    <th colspan="2">
                        <p>{{ __('students.table1.n1') }}</p>
                    </th>
                    <th colspan="2">
                        <p>{{ __('students.table1.n2') }}</p>
                    </th>
                    <th colspan="2">
                        <p>{{ __('students.table1.n3') }}</p>
                    </th>
                    <th rowspan="2">
                        <p>{{ __('common.total') }}</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $title => $items)
                    <tr class="thead">
                        <th class="!bg-secondary-200"><p>{{ $title }}</p></th>
                        <th><p>{{ __('common.male') }}</p></th>
                        <th><p>{{ __('common.female') }}</p></th>
                        <th><p>{{ __('common.male') }}</p></th>
                        <th><p>{{ __('common.female') }}</p></th>
                        <th><p>{{ __('common.male') }}</p></th>
                        <th><p>{{ __('common.female') }}</p></th>
                        <th><p>{{ __('common.total') }}</p></th>
                    </tr>
                    @foreach ($items as $key => $item)
                        <tr>
                            <td><p>{{ $key }}</p></td>
                            @foreach ($item as $value)
                                <td><p>{{ $value }}</p></td>
                            @endforeach
                            <td><p>{{ collect($item)->sum() }}</p></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td><b>{{ __('common.total') }}</b></td>
                        @php
                            $total = collect($items)->reduce(function ($carry, $item) {
                                return collect($item)->map(function ($value, $key) use ($carry) {
                                    return $carry[$key] + $value;
                                });
                            }, [0, 0, 0, 0, 0, 0]);
                        @endphp
                        @foreach ($total as $value)
                            <td><b>{{ $value }}</b></td>
                        @endforeach
                        <td><b>{{ collect($total)->sum() }}</b></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th class="!bg-secondary-200"><p>{{ __('common.total_all')}}</p></th>
                    @php
                        $total = collect($data)->reduce(function ($carry, $items) {
                            return collect($items)->reduce(function ($carry, $item) {
                                return collect($item)->map(function ($value, $key) use ($carry) {
                                    return $carry[$key] + $value;
                                });
                            }, $carry);
                        }, [0, 0, 0, 0, 0, 0]);
                    @endphp
                    @foreach ($total as $value)
                        <th><b>{{ $value }}</b></th>
                    @endforeach
                    <th><b>{{ collect($total)->sum() }}</b></th>
                </tr>
            </tfoot>
        </table>
    </article>
</div>
