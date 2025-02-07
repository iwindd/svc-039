<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 col-span-2">
    <header class="border-b pb-1 flex items-center space-x-2">
        <h2 class="font-bold text-xl">{{ __('teachers.chart') }}</h2>
    </header>
    <article class="py-2">
        <canvas id="teacherChart"></canvas>
    </article>

    <script>
        const ctx = document.getElementById('teacherChart');
        const years = Array.from({
            length: 2567 - 2555 + 1
        }, (_, i) => 2555 + i);

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: years,
                datasets: [{
                        label: @js(__('common.male')),
                        data: [30, 32, 34, 33, 28, 31, 32, 32, 39, 38, 43, 47, 48],
                        borderWidth: 1
                    },
                    {
                        label: @js(__('common.female')),
                        data: [127, 133, 137, 141, 140, 141, 121, 123, 121, 116, 112, 109, 108],
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
