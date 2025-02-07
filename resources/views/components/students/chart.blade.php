<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 col-span-2">
    <header class="border-b pb-1 flex items-center space-x-2">
        <h2 class="font-bold text-xl">{{ __('students.chart') }}</h2>
    </header>
    <article class="py-2">
        <canvas id="teacherChart"></canvas>
    </article>

    <script>
        const ctx = document.getElementById('teacherChart');
        const years = Array.from({
            length: 2567 - 2558 + 1
        }, (_, i) => 2558 + i);

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: years,
                datasets: [{
                        label: @js(__('students.certificate.normal')),
                        data: [2145,2239,2268,2516,2538,2416,2481,2283,2154,2160],
                        borderWidth: 1
                    },
                    {
                        label: @js(__('students.certificate.higher')),
                        data: [775,686,711,816,887,907,984,1003,905,833],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</div>
