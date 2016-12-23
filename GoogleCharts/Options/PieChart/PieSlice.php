<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart;

/**
 * @author Christophe Meneses
 */
class PieSlice
{
    /**
     * The color to use for this slice. Specify a valid HTML color string.
     *
     * @var string
     */
    protected $color;

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


    /**
     * PieSlice constructor.
     */
    public function __construct()
    {
        $this->textStyle = new PieSliceTextStyle();
    }


    /**
     * @return PieSliceTextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @param string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param float $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }
}
