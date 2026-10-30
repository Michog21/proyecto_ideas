<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Idea;
use App\Models\Categoria;

class IdeasGraficaDona extends ChartWidget
{
    protected ?string $heading = 'Ideas por categoria';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Categoria',
                    'data' => [5, 4, 7, 4, 3],
                    'backgroundColor' => ['#DB7093', '#FFC0CB', '#F08080', '#C71585', '#BC8F8F' ]
                ],
            ],
            'labels' => ['Tecnología', 'Educación', 'Salud', 'Medio ambiente', 'Ideas relacionadas con comida'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
