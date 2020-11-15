<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedHAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Annotations;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AreaOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Crosshair;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\DataOpacityTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Explorer;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FocusTargetTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\InterpolateNullsTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\IsStackedTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\OrientationTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ReverseCategoriesTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SelectionModeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxesTrait;

/**
 * @author Christophe Meneses
 */
class AreaChartOptions extends LineOptions
{
    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * @var Annotations
     */
    protected $annotations;

    use AreaOpacityTrait;

    /**
     * @var Crosshair
     */
    protected $crosshair;

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

    use InterpolateNullsTrait;

    use IsStackedTrait;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    use OrientationTrait;

    use ReverseCategoriesTrait;

    use SelectionModeTrait;

    use VAxesTrait;

    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->annotations = new Annotations();
        $this->crosshair = new Crosshair();
        $this->explorer = new Explorer();
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

    public function getCrosshair(): Crosshair
    {
        return $this->crosshair;
    }

    public function getExplorer(): Explorer
    {
        return $this->explorer;
    }

    public function getHAxis(): AdvancedHAxis
    {
        return $this->hAxis;
    }

    public function getLegend(): AdvancedLegend
    {
        return $this->legend;
    }
}
