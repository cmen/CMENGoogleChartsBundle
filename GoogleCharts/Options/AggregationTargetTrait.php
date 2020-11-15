<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait AggregationTargetTrait
{
    /**
     * How multiple data selections are rolled up into tooltips :
     * 'category': group selected data by x-value.
     * 'series': group selected data by series.
     * 'auto': group selected data by x-value if all selections have the same x-value, and by series otherwise.
     * 'none': show only one tooltip per selection.
     *
     * aggregationTarget will often be used in tandem with selectionMode and tooltip.trigger, e.g.:
     * var options = {
     *     // Allow multiple
     *     // simultaneous selections.
     *     selectionMode: 'multiple',
     *     // Trigger tooltips
     *     // on selections.
     *     tooltip: {trigger: 'selection'},
     *     // Group selections
     *     // by x-value.
     *     aggregationTarget: 'category',
     * };
     *
     * Default: 'auto'
     *
     * @var string
     */
    protected $aggregationTarget;

    /**
     * @return $this
     */
    public function setAggregationTarget(string $aggregationTarget)
    {
        $this->aggregationTarget = $aggregationTarget;

        return $this;
    }
}
