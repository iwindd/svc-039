@php
    $data = collect([
        __('common.economics.caption') => collect([
            __('common.economics.clothing') => [1, 1, 0, 1, 1, 1, '-'],
            __('common.economics.food') => [1, 5, 2, 3, 1, 3, '-'],
            __('common.economics.common') => [1, 1, 0, 1, 3, 0, '-'],
        ]),
        __('common.commerce.caption') => collect([
            __('common.commerce.accounting') => [0, 10, 0, 0, 0, 2, '-'],
            __('common.commerce.secretary') => [0, 4, 0, 2, 0, 1, '-'],
            __('common.commerce.marketing') => [0, 4, 0, 0, 0, 0, '-'],
            __('common.commerce.it') => [5, 3, 0, 3, 2, 0, '-'],
            __('common.commerce.logistics') => [1, 2, 0, 0, 0, 0, '-'],
        ]),
        __('common.tourism.caption') => collect([
            __('common.tourism.hotel') => [0, 6, 0, 0, 0, 1, '-'],
            __('common.tourism.travel') => [1, 2, 0, 0, 0, 2, '-'],
        ]),
        __('common.art.caption') => collect([
            __('common.art.art') => [2, 0, 0, 1, 0, 0, '-'],
            __('common.art.design') => [0, 1, 0, 1, 0, 0, '-'],
            __('common.art.graphic') => [0, 4, 1, 0, 1, 0, '-'],
        ]),
        __('common.common.caption') => collect([
            __('common.common.common') => [5, 8, 1, 2, 7, 5, '-'],
        ]),
    ]);
@endphp
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 col-span-2">
    <header class="border-b pb-1 flex items-center space-x-2">
        <h2 class="font-bold text-xl">{{ __('teachers.table2.caption') }}</h2>
    </header>
    <article class="py-2">
        <table class="table-custom">
            <thead>
                <tr>
                    <th rowspan="1">
                        <p>{{ __('teachers.table2.type') }}</p>
                    </th>
                    <th colspan="2">
                        <p>{{ __('teachers.table2.teachers') }}</p>
                    </th>
                    <th colspan="2">
                        <p>{{ __('teachers.table2.employees') }}</p>
                    </th>
                    <th colspan="2">
                        <p>{{ __('teachers.table2.special_teachers') }}</p>
                    </th>
                    <th rowspan="1">
                        <p>{{ __('common.total') }}</p>
                    </th>
                    <th rowspan="1">
                        <p>{{ __('common.note') }}</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $title => $items)
                    <tr class="thead">
                        <th class="!bg-secondary-200">
                            <p>{{ $title }}</p>
                        </th>
                        <th>
                            <p>{{ __('common.male') }}</p>
                        </th>
                        <th>
                            <p>{{ __('common.female') }}</p>
                        </th>
                        <th>
                            <p>{{ __('common.male') }}</p>
                        </th>
                        <th>
                            <p>{{ __('common.female') }}</p>
                        </th>
                        <th>
                            <p>{{ __('common.male') }}</p>
                        </th>
                        <th>
                            <p>{{ __('common.female') }}</p>
                        </th>
                        <th>
                            <p>{{ __('common.total') }}</p>
                        </th>
                        <th>
                            <p>{{ __('common.note') }}</p>
                        </th>
                    </tr>
                    @foreach ($items as $key => $item)
                        <tr>
                            <td>
                                <p>{{ $key }}</p>
                            </td>
                            @foreach (collect($item)->take(6) as $value)
                                @php
                                    if ($value <= 0) $value = '-';
                                    $item = collect($item);
                                @endphp
                                <td>
                                    <p>{{ $value }}</p>
                                </td>
                            @endforeach
                            <td>
                                <p>{{ collect($item)->take(6)->sum() }}</p>
                            </td>
                            <td>
                                <p>{{ collect($item)->last() }}</p>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>
                            <b>{{ __('common.total') }}</b>
                        </td>
                        @php
                            $total = collect($items)->reduce(function ($carry, $item) {
                                return collect($item)->take(6)->map(function ($value, $key) use ($carry) {
                                    return $carry[$key] + $value;
                                });
                            }, [0, 0, 0, 0, 0, 0, 0, 0]);
                        @endphp
                        @foreach ($total as $value)
                            <td>
                                <b>{{ $value }}</b>
                            </td>
                        @endforeach
                        <td>
                            <b>{{ collect($total)->take(6)->sum() }}</b>
                        </td>
                        <td>
                            <b>-</b>
                        </td>
                @endforeach


            </tbody>
            <tfoot>
                <tr>
                    <th rowspan="2" class="!bg-secondary-200">
                        <p>{{ __('common.total_all') }}</p>
                    </th>
                    @php
                        $total = collect($data)->reduce(function ($carry, $items) {
                            return collect($items)->reduce(function ($carry, $item) {
                                return collect($item)->take(6)->map(function ($value, $key) use ($carry) {
                                    return $carry[$key] + $value;
                                });
                            }, $carry);
                        }, [0, 0, 0, 0, 0, 0, 0, 0]);
                    @endphp
                    @foreach ($total as $value)
                        <th>
                            <p>{{ $value }}</p>
                        </th>
                    @endforeach
                    <th rowspan="2">
                        <p>{{ collect($total)->take(6)->sum() }}</p>
                    </th>
                    <th rowspan="2">
                        <p>-</p>
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <p>{{ collect($total)->take(2)->sum() }}</p>
                    </th>
                    <th colspan="2">
                        <p>{{ collect($total)->slice(2, 2)->sum() }}</p>
                    </th>
                    <th colspan="2">
                        <p>{{ collect($total)->slice(4, 2)->sum() }}</p>
                    </th>
                </tr>
            </tfoot>
        </table>
    </article>
</div>
