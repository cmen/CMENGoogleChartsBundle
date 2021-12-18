<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Histogram;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Bar;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\DataOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FocusTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\InterpolateNullsTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\IsStackedTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\OrientationTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ReverseCategoriesTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxesTrait;

/**
 * @author Christophe Meneses
 */
class HistogramOptions extends AdvancedChartOptions
{
    use DataOpacityTrait;

    use FocusTargetTrait;

    use InterpolateNullsTrait;

    use IsStackedTrait;

    use OrientationTrait;

    use ReverseCategoriesTrait;

    use VAxesTrait;

    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * @var Bar
     */
    protected $bar;

    /**
     * @var HAxis
     */
    protected $hAxis;

    /**
     * @var Histogram
     */
    protected $histogram;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    /**
     * @var MediumTooltip
     */
    protected $tooltip;

    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->bar = new Bar();
        $this->histogram = new Histogram();
        $this->hAxis = new HAxis();
        $this->legend = new AdvancedLegend();
        $this->tooltip = new MediumTooltip();
    }

    public function getAnimation(): AdvancedAnimation
    {
        return $this->animation;
    }

    public function getBar(): Bar
    {
        return $this->bar;
    }

    public function getHistogram(): Histogram
    {
        return $this->histogram;
    }

    public function getHAxis(): HAxis
    {
        return $this->hAxis;
    }

    public function getLegend(): AdvancedLegend
    {
        return $this->legend;
    }

    public function getTooltip(): MediumTooltip
    {
        return $this->tooltip;
    }
}
