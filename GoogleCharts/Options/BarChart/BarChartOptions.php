<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\BarChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnnotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Bar;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\DataOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Explorer;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FocusTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\HAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\IsStackedTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumHAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\OrientationTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ReverseCategoriesTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Trendlines;

/**
 * @author Christophe Meneses
 */
class BarChartOptions extends AdvancedChartOptions
{
    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * @var AdvancedAnnotations
     */
    protected $annotations;

    /**
     * @var Bar
     */
    protected $bar;

    use DataOpacityTrait;

    /**
     * @var Explorer
     */
    protected $explorer;

    use FocusTargetTrait;

    /**
     * Specifies properties for individual horizontal axes, if the chart has multiple horizontal axes. Each child
     * object is a hAxis object, and can contain all the properties supported by hAxis. These property values
     * override any global settings for the same property.
     *
     * To specify a chart with multiple horizontal axes, first define a new axis using series.targetAxisIndex, then
     * configure the axis using hAxes.
     *
     * @var HAxis[]
     */
    protected $hAxes;

    /**
     * @var MediumHAxis
     */
    protected $hAxis;

    use IsStackedTrait;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    use OrientationTrait;

    use ReverseCategoriesTrait;

    /**
     * @var AdvancedTooltip
     */
    protected $tooltip;

    /**
     * Displays trendlines on the charts that support them. By default, linear trendlines are used, but this can be
     * customized with the trendlines.n.type option.
     *
     * @var Trendlines[]
     */
    protected $trendlines;

    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->annotations = new AdvancedAnnotations();
        $this->bar = new Bar();
        $this->explorer = new Explorer();
        $this->hAxis = new MediumHAxis();
        $this->legend = new AdvancedLegend();
        $this->tooltip = new AdvancedTooltip();
    }

    public function getAnimation(): AdvancedAnimation
    {
        return $this->animation;
    }

    public function getAnnotations(): AdvancedAnnotations
    {
        return $this->annotations;
    }

    public function getBar(): Bar
    {
        return $this->bar;
    }

    public function getExplorer(): Explorer
    {
        return $this->explorer;
    }

    public function getHAxis(): MediumHAxis
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
     * @param HAxis[] $hAxes
     *
     * @return $this
     */
    public function setHAxes(array $hAxes)
    {
        $this->hAxes = $hAxes;

        return $this;
    }

    /**
     * @param Trendlines[] $trendlines
     *
     * @return $this
     */
    public function setTrendlines(array $trendlines)
    {
        $this->trendlines = $trendlines;

        return $this;
    }
}
