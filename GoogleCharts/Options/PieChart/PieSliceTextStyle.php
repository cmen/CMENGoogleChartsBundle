<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\PieChart;

/**
 * @author Christophe Meneses
 */
class PieSliceTextStyle
{
    /**
     * The color can be any HTML color string, for example: 'red' or '#00cc00'.
     *
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    protected $fontName;

    /**
     * @var int
     */
    protected $fontSize;

    /**
     * @param string $color
     *
     * @return PieSliceTextStyle
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param string $fontName
     *
     * @return PieSliceTextStyle
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;

        return $this;
    }

    /**
     * @param int $fontSize
     *
     * @return PieSliceTextStyle
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }
}
