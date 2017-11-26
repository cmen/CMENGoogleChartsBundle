<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class RisingColor
{
    /**
     * The fill color of rising candles, as an HTML color string.
     *
     * @var string
     */
    protected $fill;

    use StrokeTrait;

    use StrokeWidthTrait;

    /**
     * @param string $fill
     *
     * @return $this
     */
    public function setFill($fill)
    {
        $this->fill = $fill;

        return $this;
    }
}
