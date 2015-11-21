<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

/**
 * @author Christophe Meneses
 */
class Label
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
     * @var boolean
     */
    protected $bold;

    /**
     * @var boolean
     */
    protected $italic;


    /**
     * @param string $color
     *
     * @return Label
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param string $fontName
     *
     * @return Label
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;

        return $this;
    }

    /**
     * @param int $fontSize
     *
     * @return Label
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * @param boolean $bold
     *
     * @return Label
     */
    public function setBold($bold)
    {
        $this->bold = $bold;

        return $this;
    }

    /**
     * @param boolean $italic
     *
     * @return Label
     */
    public function setItalic($italic)
    {
        $this->italic = $italic;

        return $this;
    }
}
