<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait SelectionModeTrait
{
    /**
     * When selectionMode is 'multiple', users may select multiple data points.
     *
     * Default: 'single'
     *
     * @var string
     */
    protected $selectionMode;

    /**
     * @return $this
     */
    public function setSelectionMode(string $selectionMode)
    {
        $this->selectionMode = $selectionMode;

        return $this;
    }
}
