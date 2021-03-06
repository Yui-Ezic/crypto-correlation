#!/usr/bin/env php
<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Console\CalculateCommand;
use Symfony\Component\Console\Application;

$application = new Application('Console');

$application->add(new CalculateCommand());

$application->run();