<?php

declare(strict_types=1);

namespace App\Correlation\Entity\Chart;

use DateTimeImmutable;

class Period
{
    private DateTimeImmutable $start;
    private DateTimeImmutable $end;

    public function __construct(DateTimeImmutable $start, DateTimeImmutable $end)
    {

        $this->start = $start;
        $this->end = $end;
    }

    public function getStart(): DateTimeImmutable
    {
        return $this->start;
    }

    public function getEnd(): DateTimeImmutable
    {
        return $this->end;
    }
}