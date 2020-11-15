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
     * @var array<mixed>
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

    public function __construct()
    {
        parent::__construct();

        $this->animation = new Animation();
    }

    public function getAnimation(): Animation
    {
        return $this->animation;
    }

    /**
     * @return $this
     */
    public function setGreenColor(string $greenColor)
    {
        $this->greenColor = $greenColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setGreenFrom(int $greenFrom)
    {
        $this->greenFrom = $greenFrom;

        return $this;
    }

    /**
     * @return $this
     */
    public function setGreenTo(int $greenTo)
    {
        $this->greenTo = $greenTo;

        return $this;
    }

    /**
     * @param array<mixed> $majorTicks
     *
     * @return $this
     */
    public function setMajorTicks(array $majorTicks)
    {
        $this->majorTicks = $majorTicks;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMinorTicks(int $minorTicks)
    {
        $this->minorTicks = $minorTicks;

        return $this;
    }

    /**
     * @return $this
     */
    public function setRedColor(string $redColor)
    {
        $this->redColor = $redColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setRedFrom(int $redFrom)
    {
        $this->redFrom = $redFrom;

        return $this;
    }

    /**
     * @return $this
     */
    public function setRedTo(int $redTo)
    {
        $this->redTo = $redTo;

        return $this;
    }

    /**
     * @return $this
     */
    public function setYellowColor(string $yellowColor)
    {
        $this->yellowColor = $yellowColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setYellowFrom(int $yellowFrom)
    {
        $this->yellowFrom = $yellowFrom;

        return $this;
    }

    /**
     * @return $this
     */
    public function setYellowTo(int $yellowTo)
    {
        $this->yellowTo = $yellowTo;

        return $this;
    }
}
