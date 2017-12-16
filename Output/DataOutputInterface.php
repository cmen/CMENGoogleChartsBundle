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
     * @param Data   $data
     * @param string $dataName Variable name who will contain the data
     *
     * @return string
     *
     * @throws GoogleChartsException
     */
    public function draw(Data $data, $dataName);
}
