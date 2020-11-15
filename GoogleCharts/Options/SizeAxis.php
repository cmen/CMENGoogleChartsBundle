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
     * @return $this
     */
    public function setMaxSize(int $maxSize)
    {
        $this->maxSize = $maxSize;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxValue(int $maxValue)
    {
        $this->maxValue = $maxValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMinSize(int $minSize)
    {
        $this->minSize = $minSize;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMinValue(int $minValue)
    {
        $this->minValue = $minValue;

        return $this;
    }
}
