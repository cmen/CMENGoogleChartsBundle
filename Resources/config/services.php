<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use CMEN\GoogleChartsBundle\Output\Javascript\ChartOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\DataOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\DateOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\EventsOutput;
use CMEN\GoogleChartsBundle\Output\Javascript\OptionsOutput;
use CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension;

return static function (ContainerConfigurator $container) {
    $services = $container->services();

    $services->set(DateOutput::class, DateOutput::class)
             ->private();

    $services->set(OptionsOutput::class, OptionsOutput::class)
             ->private()
             ->args([service(DateOutput::class)]);

    $services->set(DataOutput::class, DataOutput::class)
             ->private()
             ->args([service(DateOutput::class)]);

    $services->set(EventsOutput::class, EventsOutput::class)
             ->private();

    $services->set(ChartOutput::class, ChartOutput::class)
             ->private()
             ->args([
                 '%cmen_google_charts.version%',
                 '%cmen_google_charts.language%',
                 service(OptionsOutput::class),
                 service(DataOutput::class),
                 service(EventsOutput::class),
             ]);

    $services->set(GoogleChartsExtension::class, GoogleChartsExtension::class)
             ->private()
             ->args([service(ChartOutput::class)])
             ->tag('twig.extension');
};
