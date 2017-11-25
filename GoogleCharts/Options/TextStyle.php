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

    use FontNameTrait;

    /**
     * @var int
     */
    protected $fontSize;


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
}
