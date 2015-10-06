<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class SizeAxis
{
    /**
     * Maximum radius of the largest possible bubble, in pixels.
     *
     * @var int
     */
    protected $maxSize;

    /**
     * The size value (as appears in the chart data) to be mapped to sizeAxis.maxSize. Larger values will be cropped
     * to this value.
     *
     * @var int
     */
    protected $maxValue;

    /**
     * Mininum radius of the smallest possible bubble, in pixels.
     *
     * @var int
     */
    protected $minSize;

    /**
     * The size value (as appears in the chart data) to be mapped to sizeAxis.minSize. Smaller values will be cropped
     * to this value.
     *
     * @var int
     */
    protected $minValue;


    /**
     * @param int $maxSize
     */
    public function setMaxSize($maxSize)
    {
        $this->maxSize = $maxSize;
    }

    /**
     * @param int $maxValue
     */
    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;
    }

    /**
     * @param int $minSize
     */
    public function setMinSize($minSize)
    {
        $this->minSize = $minSize;
    }

    /**
     * @param int $minValue
     */
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;
    }
}
