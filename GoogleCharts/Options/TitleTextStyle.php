<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class TitleTextStyle
{
    /**
     * The color can be any HTML color string, for example: 'red' or '#00cc00'.
     *
     * @var string
     */
    protected $color;

    use FontNameTrait;

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
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @param int $fontSize
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * @param boolean $bold
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->bold = $bold;

        return $this;
    }

    /**
     * @param boolean $italic
     *
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->italic = $italic;

        return $this;
    }
}
