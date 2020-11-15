<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\CandlestickChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedHAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AggregationTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Bar;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Candlestick;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FocusTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\OrientationTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ReverseCategoriesTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SelectionModeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxesTrait;

/**
 * @author Christophe Meneses
 */
class CandlestickChartOptions extends AdvancedChartOptions
{
    use AggregationTargetTrait;

    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * @var Bar
     */
    protected $bar;

    /**
     * @var Candlestick
     */
    protected $candlestick;

    use FocusTargetTrait;

    /**
     * @var AdvancedHAxis
     */
    protected $hAxis;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    use OrientationTrait;

    use ReverseCategoriesTrait;

    use SelectionModeTrait;

    /**
     * @var AdvancedTooltip
     */
    protected $tooltip;

    use VAxesTrait;

    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->bar = new Bar();
        $this->candlestick = new Candlestick();
        $this->hAxis = new AdvancedHAxis();
        $this->legend = new AdvancedLegend();
        $this->tooltip = new AdvancedTooltip();
    }

    public function getAnimation(): AdvancedAnimation
    {
        return $this->animation;
    }

    public function getBar(): Bar
    {
        return $this->bar;
    }

    public function getCandlestick(): Candlestick
    {
        return $this->candlestick;
    }

    public function getHAxis(): AdvancedHAxis
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
}
