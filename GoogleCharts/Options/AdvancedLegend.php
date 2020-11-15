<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedLegend extends Legend
{
    /**
     * Maximum number of lines in the legend. Set this to a number greater than one to add lines to your legend.
     * Note: The exact logic used to determine the actual number of lines rendered is still in flux.
     * This option currently works only when legend.position is 'top'.
     *
     * @var int
     */
    protected $maxLines;

    /**
     * @return $this
     */
    public function setMaxLines(int $maxLines)
    {
        $this->maxLines = $maxLines;

        return $this;
    }
}
