<?php

namespace CMEN\GoogleChartsBundle\Output;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Data;

/**
 * @author Christophe Meneses
 */
interface DataOutputInterface
{
    /**
     * Returns a string to draw data.
     *
     * @throws GoogleChartsException
     */
    public function draw(Data $data, string $dataName): string;
}
