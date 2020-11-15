<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Candlestick
{
    /**
     * If true, rising candles will appear hollow and falling candles will appear solid, otherwise, the opposite.
     *
     * @var bool
     */
    protected $hollowIsRising;

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

    public function getFallingColor(): FallingColor
    {
        return $this->fallingColor;
    }

    public function getRisingColor(): RisingColor
    {
        return $this->risingColor;
    }

    /**
     * @return $this
     */
    public function setHollowIsRising(bool $hollowIsRising)
    {
        $this->hollowIsRising = $hollowIsRising;

        return $this;
    }
}
