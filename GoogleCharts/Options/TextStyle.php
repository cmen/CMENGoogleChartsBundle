<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

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
     * @var boolean
     */
    protected $bold;

    /**
     * @var boolean
     */
    protected $italic;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getFontName()
    {
        return $this->fontName;
    }

    /**
     * @param string $fontName
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;
    }

    /**
     * @return int
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param int $fontSize
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
    }

    /**
     * @return boolean
     */
    public function isBold()
    {
        return $this->bold;
    }

    /**
     * @param boolean $bold
     */
    public function setBold($bold)
    {
        $this->bold = $bold;
    }

    /**
     * @return boolean
     */
    public function isItalic()
    {
        return $this->italic;
    }

    /**
     * @param boolean $italic
     */
    public function setItalic($italic)
    {
        $this->italic = $italic;
    }
}
