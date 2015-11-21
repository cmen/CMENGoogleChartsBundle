<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class TextStyle
{
    /**
     * The color can be any HTML color string, for example: 'red' or '#00cc00'. Also see fontName and fontSize.
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
     * @return TextStyle
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param string $fontName
     *
     * @return TextStyle
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;

        return $this;
    }

    /**
     * @param int $fontSize
     *
     * @return TextStyle
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }
}
