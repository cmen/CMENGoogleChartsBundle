<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options\Gauge;

use CMENGoogleChartsBundle\GoogleCharts\Options\Animation;
use CMENGoogleChartsBundle\GoogleCharts\Options\ChartOptions;

/**
 * @author Christophe Meneses
 */
class GaugeOptions extends ChartOptions
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

    /**
     * The maximal value of a gauge.
     *
     * @var int
     */
    protected $max;

    /**
     * The minimal value of a gauge.
     *
     * @var int
     */
    protected $min;

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
     */
    public function setGreenColor($greenColor)
    {
        $this->greenColor = $greenColor;
    }

    /**
     * @param int $greenFrom
     */
    public function setGreenFrom($greenFrom)
    {
        $this->greenFrom = $greenFrom;
    }

    /**
     * @param int $greenTo
     */
    public function setGreenTo($greenTo)
    {
        $this->greenTo = $greenTo;
    }

    /**
     * @param array $majorTicks
     */
    public function setMajorTicks($majorTicks)
    {
        $this->majorTicks = $majorTicks;
    }

    /**
     * @param int $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @param int $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * @param int $minorTicks
     */
    public function setMinorTicks($minorTicks)
    {
        $this->minorTicks = $minorTicks;
    }

    /**
     * @param string $redColor
     */
    public function setRedColor($redColor)
    {
        $this->redColor = $redColor;
    }

    /**
     * @param int $redFrom
     */
    public function setRedFrom($redFrom)
    {
        $this->redFrom = $redFrom;
    }

    /**
     * @param int $redTo
     */
    public function setRedTo($redTo)
    {
        $this->redTo = $redTo;
    }

    /**
     * @param string $yellowColor
     */
    public function setYellowColor($yellowColor)
    {
        $this->yellowColor = $yellowColor;
    }

    /**
     * @param int $yellowFrom
     */
    public function setYellowFrom($yellowFrom)
    {
        $this->yellowFrom = $yellowFrom;
    }

    /**
     * @param int $yellowTo
     */
    public function setYellowTo($yellowTo)
    {
        $this->yellowTo = $yellowTo;
    }
}
