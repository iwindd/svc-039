@php
    $data = collect([
        __('common.executives') => [4, 1, 5, 0, 5, 0, 0, '-'],
        __('common.teachers') => [17, 51, 68, 0, 32, 36, 0, '-'],
        __('common.personnel') => [0, 1, 1, 0, 0, 0, 1, '-'],
        __('common.employees') => [4, 16, 20, 0, 5, 15, 0, '-'],
        __('common.special_teachers') => [15, 15, 30, 0, 3, 27, 0, '-'],
        __('common.permanent_employees') => [3, 2, 5, 0, 0, 0, 5, '-'],
        __('common.temporary_employees') => [6, 21, 27, 0, 0, 8, 19, '-'],
    ]);

    $total_note = '-';
@endphp
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 col-span-2">
    <header class="border-b pb-1 flex items-center space-x-2">
        <h2 class="font-bold text-xl">{{ __('teachers.table1.caption') }}</h2>
    </header>
    <article class="py-2 overflow-y-auto">
        <table class="table-custom">
            <thead>
                <tr>
                    <th rowspan="2">
                        <p>{{ __('teachers.table1.type') }}</p>
                    </th>
                    <th colspan="3">
                        <p>{{ __('teachers.table1.rate') }}</p>
                    </th>
                    <th colspan="4">
                        <p>{{ __('teachers.table1.education') }}</p>
                    </th>
                    <th rowspan="2">
                        <p>{{ __('common.note') }}</p>
                    </th>
                </tr>
                <tr>
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
                        <p>{{ __('common.doctoral') }}</p>
                    </th>
                    <th>
                        <p>{{ __('common.master') }}</p>
                    </th>
                    <th>
                        <p>{{ __('common.bachelor') }}</p>
                    </th>
                    <th>
                        <p>{{ __('common.under_bachelor') }}</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $title => $items)
                    <tr>
                        <td>
                            <p>{{ $title }}</p>
                        </td>
                        @foreach ($items as $key => $value)
                            @if ($value <= 0)
                                @php
                                    $value = '-';
                                @endphp
                            @endif
                            <td>
                                <p>
                                    {{ $value }}
                                </p>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>
                        <p>{{ __('common.total') }}</p>
                    </th>
                    @foreach ($data->first() as $key => $value)
                        @php
                            $total =
                                $value === '-'
                                    ? '-'
                                    : $data->sum(function ($item) use ($key) {
                                        return $item[$key];
                                    });
                        @endphp
                        <th>
                            <p>
                                @if ($key == count($data->first()) - 1)
                                    {{ $total_note }}
                                @else
                                    {{ $total }}
                                @endif
                            </p>
                        </th>
                    @endforeach
                </tr>
            </tfoot>
        </table>
    </article>
</div>
