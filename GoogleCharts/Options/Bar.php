<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Bar
{
    /**
     * The width of a group of bars, specified in either of these formats : Pixels (e.g. 50).
     * Percentage of the available width for each group (e.g. '20%'), where '100%' means that groups have no space
     * between them.
     *
     * @var int|string
     */
    protected $groupWidth;

    /**
     * @param int|string $groupWidth
     *
     * @return $this
     */
    public function setGroupWidth($groupWidth)
    {
        $this->groupWidth = $groupWidth;

        return $this;
    }
}
