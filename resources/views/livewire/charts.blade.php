<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Graficas
        </h2>
    </x-slot>

    <div class="grid grid-cols-2 gap-4">
        <div>
            Grafica de barras
            <livewire:livewire-column-chart
                key="{{ $columnChartModel->reactiveKey() }}"
                :column-chart-model="$columnChartModel"
            />
        </div>

        <div>
            Grafica de Pais
            <livewire:livewire-pie-chart
                :pie-chart-model="$chartModel"
            />
        </div>

    </div>
</div>
