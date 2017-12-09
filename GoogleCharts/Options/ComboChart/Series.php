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

    /**
     * Series constructor.
     */
    public function __construct()
    {
        $this->annotations = new Annotations();
        $this->fallingColor = new FallingColor();
        $this->risingColor = new RisingColor();
    }

    /**
     * @return Annotations
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * @return FallingColor
     */
    public function getFallingColor()
    {
        return $this->fallingColor;
    }

    /**
     * @return RisingColor
     */
    public function getRisingColor()
    {
        return $this->risingColor;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
