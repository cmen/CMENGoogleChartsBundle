<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

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
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param string $fontName
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;
    }

    /**
     * @param int $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }
}
