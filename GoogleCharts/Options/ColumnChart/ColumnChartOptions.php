<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ColumnChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnnotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedHAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Bar;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\DataOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Explorer;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FocusTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\IsStackedTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Legend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\OrientationTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ReverseCategoriesTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Trendlines;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxesTrait;

/**
 * @author Christophe Meneses
 */
class ColumnChartOptions extends AdvancedChartOptions
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
     * @var AdvancedHAxis
     */
    protected $hAxis;

    use IsStackedTrait;

    /**
     * @var Legend
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

    use VAxesTrait;

    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->annotations = new AdvancedAnnotations();
        $this->bar = new Bar();
        $this->explorer = new Explorer();
        $this->hAxis = new AdvancedHAxis();
        $this->legend = new Legend();
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

    public function getHAxis(): AdvancedHAxis
    {
        return $this->hAxis;
    }

    public function getLegend(): Legend
    {
        return $this->legend;
    }

    public function getTooltip(): AdvancedTooltip
    {
        return $this->tooltip;
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
