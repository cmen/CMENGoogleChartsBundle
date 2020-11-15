<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait TriggerTrait
{
    /**
     * The user interaction that causes the tooltip to be displayed :
     * 'focus' - The tooltip will be displayed when the user hovers over the element.
     * 'none' - The tooltip will not be displayed.
     * 'selection' - The tooltip will be displayed when the user selects the element.
     *
     * Default: 'focus'
     *
     * @var string
     */
    protected $trigger;

    /**
     * @return $this
     */
    public function setTrigger(string $trigger)
    {
        $this->trigger = $trigger;

        return $this;
    }
}
