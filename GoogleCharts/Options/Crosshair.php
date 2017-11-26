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
