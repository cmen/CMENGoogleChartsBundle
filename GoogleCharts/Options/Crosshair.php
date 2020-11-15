<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Crosshair
{
    use ColorTrait;

    /**
     * @var Focused
     */
    protected $focused;

    use OpacityTrait;

    use OrientationTrait;

    /**
     * @var Selected
     */
    protected $selected;

    /**
     * Value can be :
     * 'both' : display on both focus and selection
     * 'focus' : display on focus only
     * 'selection' : display on selection only.
     *
     * @var string
     */
    protected $trigger;

    public function __construct()
    {
        $this->focused = new Focused();
        $this->selected = new Selected();
    }

    public function getFocused(): Focused
    {
        return $this->focused;
    }

    public function getSelected(): Selected
    {
        return $this->selected;
    }

    /**
     * @return $this
     */
    public function setTrigger(string $trigger)
    {
        $this->trigger = $trigger;

        return $this;
    }
}
