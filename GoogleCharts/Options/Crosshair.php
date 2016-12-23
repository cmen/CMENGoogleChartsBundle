<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Crosshair
{
    /**
     * The crosshair color, expressed as either a color name (e.g., "blue") or an RGB value (e.g., "#adf").
     *
     * @var string
     */
    protected $color;

    /**
     * @var Focused
     */
    protected $focused;

    /**
     * The crosshair opacity, with 0.0 being fully transparent and 1.0 fully opaque.
     *
     * @var float
     */
    protected $opacity;

    /**
     * The crosshair orientation, which can be 'vertical' for vertical hairs only, 'horizontal' for horizontal hairs
     * only, or 'both' for traditional crosshairs.
     *
     * @var string
     */
    protected $orientation;

    /**
     * @var Selected
     */
    protected $selected;

    /**
     * @var string
     */
    protected $trigger;


    /**
     * Crosshair constructor.
     */
    public function __construct()
    {
        $this->focused = new Focused();
        $this->selected = new Selected();
    }


    /**
     * @return Focused
     */
    public function getFocused()
    {
        return $this->focused;
    }

    /**
     * @return Selected
     */
    public function getSelected()
    {
        return $this->selected;
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
     * @param float $opacity
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }

    /**
     * @param string $orientation
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * @param string $trigger
     *
     * @return $this
     */
    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;

        return $this;
    }
}
