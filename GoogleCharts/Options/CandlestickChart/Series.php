<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\CandlestickChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedSeries;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FallingColor;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\RisingColor;

/**
 * @author Christophe Meneses
 */
class Series extends AdvancedSeries
{
    /**
     * @var FallingColor
     */
    protected $fallingColor;

    /**
     * @var RisingColor
     */
    protected $risingColor;

    public function __construct()
    {
        $this->fallingColor = new FallingColor();
        $this->risingColor = new RisingColor();
    }

    public function getRisingColor(): RisingColor
    {
        return $this->risingColor;
    }

    public function getFallingColor(): FallingColor
    {
        return $this->fallingColor;
    }
}
