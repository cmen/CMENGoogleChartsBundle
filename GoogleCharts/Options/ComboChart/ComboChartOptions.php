<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\ComboChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedHAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Bar;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Candlestick;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Crosshair;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\CurveTypeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\DataOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FocusTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\InterpolateNullsTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\IsStackedTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\OrientationTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ReverseCategoriesTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SelectionModeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Trendlines;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxesTrait;

/**
 * @author Christophe Meneses
 */
class ComboChartOptions extends LineOptions
{
    use AreaOpacityTrait;

    use CurveTypeTrait;

    use DataOpacityTrait;

    use FocusTargetTrait;

    use InterpolateNullsTrait;

    use IsStackedTrait;

    use OrientationTrait;

    use ReverseCategoriesTrait;

    use SelectionModeTrait;

    use VAxesTrait;

    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * @var Annotations
     */
    protected $annotations;

    /**
     * @var Bar
     */
    protected $bar;

    /**
     * @var Candlestick
     */
    protected $candlestick;

    /**
     * @var Crosshair
     */
    protected $crosshair;

    /**
     * @var AdvancedHAxis
     */
    protected $hAxis;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    /**
     * The default line type for any series not specified in the series property. Available values are 'line', 'area',
     * 'bars', 'candlesticks', and 'steppedArea'.
     *
     * @var string
     */
    protected $seriesType;

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
        $this->annotations = new Annotations();
        $this->bar = new Bar();
        $this->candlestick = new Candlestick();
        $this->crosshair = new Crosshair();
        $this->hAxis = new AdvancedHAxis();
        $this->legend = new AdvancedLegend();
    }

    public function getAnimation(): AdvancedAnimation
    {
        return $this->animation;
    }

    public function getAnnotations(): Annotations
    {
        return $this->annotations;
    }

    public function getBar(): Bar
    {
        return $this->bar;
    }

    public function getCandlestick(): Candlestick
    {
        return $this->candlestick;
    }

    public function getCrosshair(): Crosshair
    {
        return $this->crosshair;
    }

    public function getHAxis(): AdvancedHAxis
    {
        return $this->hAxis;
    }

    public function getLegend(): AdvancedLegend
    {
        return $this->legend;
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

    /**
     * @return $this
     */
    public function setSeriesType(string $seriesType)
    {
        $this->seriesType = $seriesType;

        return $this;
    }
}
