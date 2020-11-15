<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait FocusTargetTrait
{
    /**
     *  The type of the entity that receives focus on mouse hover. Also affects which entity is selected by mouse
     * click, and which data table element is associated with events. Can be one of the following :
     * 'datum' - Focus on a single data point. Correlates to a cell in the data table.
     * 'category' - Focus on a grouping of all data points along the major axis. Correlates to a row in the data table.
     *
     * In focusTarget 'category' the tooltip displays all the category values. This may be useful for comparing values
     * of different series.
     *
     * Default: 'datum'
     *
     * @var string
     */
    protected $focusTarget;

    /**
     * @return $this
     */
    public function setFocusTarget(string $focusTarget)
    {
        $this->focusTarget = $focusTarget;

        return $this;
    }
}
