<?php

namespace App\Livewire;

use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class Charts extends Component
{

    public function render()
    {
        $columnChartModel = (new ColumnChartModel())
            ->setTitle('Tipo de gastos')
            ->setAnimated(true)
            ->addColumn('Comida', 100, '#f6ad55')
            ->addColumn('Compras', 200, '#fc8181')
            ->addColumn('Viajes', 300, '#90cdf4');

        $chartModel = ( new pieChartModel())
            ->setAnimated(true)
            ->setTitle('Tipo de gastos')
            ->addSlice('Comida', 100, '#f6ad55')
            ->addSlice('Compras', 200, '#fc8181')
            ->addSlice('Viajes', 300, '#90cdf4')
            ->asDonut();

        return view('livewire.charts', compact('columnChartModel', 'chartModel'));
    }
}
