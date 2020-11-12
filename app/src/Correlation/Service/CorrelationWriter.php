<?php

declare(strict_types=1);

namespace App\Correlation\Service;

interface CorrelationWriter
{
    public function write(array $correlation): void;
}