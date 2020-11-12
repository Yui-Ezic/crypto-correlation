<?php

declare(strict_types=1);

namespace App\Correlation\Service;

use App\Correlation\Entity\Chart\Chart;

interface Calculator
{
    public function calculateCorrelation(Chart $chart1, Chart $chart2): array;
}