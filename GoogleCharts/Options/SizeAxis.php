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
     *
     * @return SizeAxis
     */
    public function setMaxSize($maxSize)
    {
        $this->maxSize = $maxSize;

        return $this;
    }

    /**
     * @param int $maxValue
     *
     * @return SizeAxis
     */
    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;

        return $this;
    }

    /**
     * @param int $minSize
     *
     * @return SizeAxis
     */
    public function setMinSize($minSize)
    {
        $this->minSize = $minSize;

        return $this;
    }

    /**
     * @param int $minValue
     *
     * @return SizeAxis
     */
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;

        return $this;
    }
}
