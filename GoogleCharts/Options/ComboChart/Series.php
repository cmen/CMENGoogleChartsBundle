<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\CurveTypeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FallingColor;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineSeries;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\RisingColor;

/**
 * @author Christophe Meneses
 */
class Series extends LineSeries
{
    /**
     * @var Annotations
     */
    protected $annotations;

    use AreaOpacityTrait;

    use CurveTypeTrait;

    /**
     * @var FallingColor
     */
    protected $fallingColor;

    /**
     * @var RisingColor
     */
    protected $risingColor;

    /**
     * The type of marker for this series. Valid values are 'line', 'area', 'bars', 'candlesticks' and 'steppedArea'.
     * Note that bars are actually vertical bars (columns). The default value is specified by the chart's seriesType
     * option.
     *
     * @var string
     */
    protected $type;

    public function __construct()
    {
        $this->annotations = new Annotations();
        $this->fallingColor = new FallingColor();
        $this->risingColor = new RisingColor();
    }

    public function getAnnotations(): Annotations
    {
        return $this->annotations;
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
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
