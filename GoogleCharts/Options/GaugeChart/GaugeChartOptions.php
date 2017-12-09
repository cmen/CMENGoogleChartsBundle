<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GaugeChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\Animation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MaxTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MinTrait;

/**
 * @author Christophe Meneses
 */
class GaugeChartOptions extends ChartOptions
{
    /**
     * @var Animation
     */
    protected $animation;

    /**
     * The color to use for the green section, in HTML color notation.
     *
     * @var string
     */
    protected $greenColor;

    /**
     * The lowest value for a range marked by a green color.
     *
     * @var int
     */
    protected $greenFrom;

    /**
     * The highest value for a range marked by a green color.
     *
     * @var int
     */
    protected $greenTo;

    /**
     * Labels for major tick marks. The number of labels define the number of major ticks in all gauges. The default
     * is five major ticks, with the labels of the minimal and maximal gauge value.
     *
     * @var array
     */
    protected $majorTicks;

    use MaxTrait;

    use MinTrait;

    /**
     * The number of minor tick section in each major tick section.
     *
     * @var int
     */
    protected $minorTicks;

    /**
     * The color to use for the red section, in HTML color notation.
     *
     * @var string
     */
    protected $redColor;

    /**
     * The lowest value for a range marked by a red color.
     *
     * @var int
     */
    protected $redFrom;

    /**
     * The highest value for a range marked by a red color.
     *
     * @var int
     */
    protected $redTo;

    /**
     * The color to use for the yellow section, in HTML color notation.
     *
     * @var string
     */
    protected $yellowColor;

    /**
     * The lowest value for a range marked by a yellow color.
     *
     * @var int
     */
    protected $yellowFrom;

    /**
     * The highest value for a range marked by a yellow color.
     *
     * @var int
     */
    protected $yellowTo;

    /**
     * GaugeChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->animation = new Animation();
    }

    /**
     * @return Animation
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * @param string $greenColor
     *
     * @return $this
     */
    public function setGreenColor($greenColor)
    {
        $this->greenColor = $greenColor;

        return $this;
    }

    /**
     * @param int $greenFrom
     *
     * @return $this
     */
    public function setGreenFrom($greenFrom)
    {
        $this->greenFrom = $greenFrom;

        return $this;
    }

    /**
     * @param int $greenTo
     *
     * @return $this
     */
    public function setGreenTo($greenTo)
    {
        $this->greenTo = $greenTo;

        return $this;
    }

    /**
     * @param array $majorTicks
     *
     * @return $this
     */
    public function setMajorTicks($majorTicks)
    {
        $this->majorTicks = $majorTicks;

        return $this;
    }

    /**
     * @param int $minorTicks
     *
     * @return $this
     */
    public function setMinorTicks($minorTicks)
    {
        $this->minorTicks = $minorTicks;

        return $this;
    }

    /**
     * @param string $redColor
     *
     * @return $this
     */
    public function setRedColor($redColor)
    {
        $this->redColor = $redColor;

        return $this;
    }

    /**
     * @param int $redFrom
     *
     * @return $this
     */
    public function setRedFrom($redFrom)
    {
        $this->redFrom = $redFrom;

        return $this;
    }

    /**
     * @param int $redTo
     *
     * @return $this
     */
    public function setRedTo($redTo)
    {
        $this->redTo = $redTo;

        return $this;
    }

    /**
     * @param string $yellowColor
     *
     * @return $this
     */
    public function setYellowColor($yellowColor)
    {
        $this->yellowColor = $yellowColor;

        return $this;
    }

    /**
     * @param int $yellowFrom
     *
     * @return $this
     */
    public function setYellowFrom($yellowFrom)
    {
        $this->yellowFrom = $yellowFrom;

        return $this;
    }

    /**
     * @param int $yellowTo
     *
     * @return $this
     */
    public function setYellowTo($yellowTo)
    {
        $this->yellowTo = $yellowTo;

        return $this;
    }
}
