<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/DependencyInjection',
        __DIR__.'/Exception',
        __DIR__.'/GoogleCharts',
        __DIR__.'/Output',
        __DIR__.'/Tests',
        __DIR__.'/Twig',
    ])
    ->withPhpSets(php81: true);
