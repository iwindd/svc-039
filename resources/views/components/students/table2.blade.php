@php
    $data = collect([
        __('common.business.caption') => [
            __('common.business.accounting') => [3, 77, 5, 76],
            __('common.business.accounting_2') => [1, 11, 0, 0],
            __('common.business.marketing') => [2, 18, 2, 23],
            __('common.business.business') => [3, 17, 0, 0],
            __('common.business.business_3') => [3, 21, 0, 0],
            __('common.business.it') => [0, 0, 15, 28],
            __('common.business.it_3') => [0, 0, 11, 2],
            __('common.business.manage') => [0, 0, 1, 24],
            __('common.business.manage_3') => [0, 0, 3, 37],
            __('common.business.stock_2') => [7, 10, 4, 19],
        ],
        __('common.economics.caption') => [
            __('common.economics.business') => [0, 6, 1, 1],
            __('common.economics.business_3') => [1, 2, 0, 4],
            __('common.economics.food') => [0, 0, 10, 12],
            __('common.economics.food_2') => [0, 0, 5, 7],
            __('common.economics.food_3') => [0, 0, 2, 23],
            __('common.economics.chef_2') => [0, 0, 6, 11],
        ],
        __('common.tourism.caption') => [
            __('common.tourism.hotel') => [1, 4, 0, 0],
            __('common.tourism.hotel_3') => [1, 15, 0, 0],
            __('common.tourism.hotel_2') => [2, 19, 0, 0],
            __('common.tourism.food_service') => [0, 0, 0, 17],
            __('common.tourism.food_service_3') => [0, 0, 4, 2],
            __('common.tourism.food_service_2') => [0, 0, 0, 16],
            __('common.tourism.travel_2') => [2, 9, 4, 10],
            __('common.tourism.travel_32') => [0, 2, 1, 3],
        ],
        __('common.logistics.caption') => [
            __('common.logistics.logistics_32') => [12, 8, 0, 0],
            __('common.logistics.logistics_2') => [11, 23, 0, 0],
        ],
        __('common.food.caption') => [
            __('common.food.food') => [8, 20, 0, 0],
            __('common.food.food_3') => [4, 3, 0, 0],
            __('common.food.food_2') => [1, 13, 0, 0],
            __('common.food.chef_2') => [7, 5, 0, 0],
        ],
        __('common.art2.caption') => [
            __('common.art2.graphic') => [2, 1, 0, 0],
            __('common.art2.graphic_3') => [1, 1, 0, 0],
        ],
        __('common.it.caption') => [
            __('common.it.it') => [12, 26, 0, 0],
            __('common.it.it_2') => [1, 2, 0, 0],
            __('common.it.it_3') => [10, 14, 0, 0],
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
                        <p>{{ __('students.table2.type') }}</p>
                    </th>
                    <th colspan="2">
                        <p>{{ __('students.table2.h1') }}</p>
                    </th>
                    <th colspan="2">
                        <p>{{ __('students.table2.h2') }}</p>
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
                            }, [0, 0, 0, 0, 0]);
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
