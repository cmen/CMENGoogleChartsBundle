<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorTrait;

/**
 * @author Christophe Meneses
 */
class PieSlice
{
    use ColorTrait;

    /**
     * How far to separate the slice from the rest of the pie, from 0.0 (not at all) to 1.0 (the pie's radius).
     *
     * @var float
     */
    protected $offset;

    /**
     * Overrides the global pieSliceTextStyle for this slice.
     *
     * @var PieSliceTextStyle
     */
    protected $textStyle;

    public function __construct()
    {
        $this->textStyle = new PieSliceTextStyle();
    }

    public function getTextStyle(): PieSliceTextStyle
    {
        return $this->textStyle;
    }

    /**
     * @return $this
     */
    public function setOffset(float $offset)
    {
        $this->offset = $offset;

        return $this;
    }
}
