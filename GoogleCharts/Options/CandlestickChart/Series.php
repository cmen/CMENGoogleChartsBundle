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

    /**
     * Series constructor.
     */
    public function __construct()
    {
        $this->fallingColor = new FallingColor();
        $this->risingColor = new RisingColor();
    }

    /**
     * @return RisingColor
     */
    public function getRisingColor()
    {
        return $this->risingColor;
    }

    /**
     * @return FallingColor
     */
    public function getFallingColor()
    {
        return $this->fallingColor;
    }
}
