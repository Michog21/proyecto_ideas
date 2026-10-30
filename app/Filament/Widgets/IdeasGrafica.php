<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Idea;
use App\Models\Categoria;

class IdeasGrafica extends ChartWidget
{
    protected ?string $heading = 'Estado de las ideas';

    protected function getData(): array
    {
        $registradas = Idea::where('estado', 'registrada')->count();
        $revision = Idea::where('estado', 'en revisión')->count();
        $aprobadas = Idea::where('estado', 'aprobada')->count();
        $rechazadas = Idea::where('estado', 'Rechazada')->count();

        return [
            'datasets' => [
                [
                    'label' => 'Estados',
                    'data' => [$registradas, $revision, $aprobadas, $rechazadas],
                    'backgroundColor' => ['#FFF0F5', '#FFE4E1', '#FFFAFA', '#FFFFF0' ]
                ],
            ],
            'labels' => [' Registrada', 'En revisión', 'Aprobada', 'Rechazada'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
