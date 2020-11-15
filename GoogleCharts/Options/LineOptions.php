<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class LineOptions extends AdvancedChartOptions
{
    use AggregationTargetTrait;

    use LineDashStyleTrait;

    use LineWidthTrait;

    use PointTrait;

    /**
     * @var AdvancedTooltip
     */
    protected $tooltip;

    public function __construct()
    {
        parent::__construct();

        $this->tooltip = new AdvancedTooltip();
    }

    public function getTooltip(): AdvancedTooltip
    {
        return $this->tooltip;
    }
}
