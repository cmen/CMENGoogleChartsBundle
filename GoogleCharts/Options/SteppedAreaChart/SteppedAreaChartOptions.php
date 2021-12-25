<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SteppedAreaChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AggregationTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\IsStackedTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineDashStyleTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ReverseCategoriesTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SelectionModeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxesTrait;

/**
 * @author Christophe Meneses
 */
class SteppedAreaChartOptions extends AdvancedChartOptions
{
    use AggregationTargetTrait;

    use AreaOpacityTrait;

    use IsStackedTrait;

    use LineDashStyleTrait;

    use ReverseCategoriesTrait;

    use SelectionModeTrait;

    use VAxesTrait;

    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * If set to true, will connect the steps to form a stepped line. Otherwise, only a top line appears. The default
     * is to connect the steps.
     *
     * @var bool
     */
    protected $connectSteps;

    /**
     * @var HAxis
     */
    protected $hAxis;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    /**
     * @var AdvancedTooltip
     */
    protected $tooltip;

    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->hAxis = new HAxis();
        $this->legend = new AdvancedLegend();
        $this->tooltip = new AdvancedTooltip();
    }

    public function getAnimation(): AdvancedAnimation
    {
        return $this->animation;
    }

    public function getHAxis(): HAxis
    {
        return $this->hAxis;
    }

    public function getLegend(): AdvancedLegend
    {
        return $this->legend;
    }

    public function getTooltip(): AdvancedTooltip
    {
        return $this->tooltip;
    }

    /**
     * @return $this
     */
    public function setConnectSteps(bool $connectSteps)
    {
        $this->connectSteps = $connectSteps;

        return $this;
    }
}
