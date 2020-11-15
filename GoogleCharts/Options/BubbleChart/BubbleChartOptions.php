<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\BubbleChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\BasicTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Explorer;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumHAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SelectionModeTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SizeAxis;

/**
 * @author Christophe Meneses
 */
class BubbleChartOptions extends AdvancedChartOptions
{
    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * @var Bubble
     */
    protected $bubble;

    /**
     * @var ColorAxis
     */
    protected $colorAxis;

    /**
     * @var Explorer
     */
    protected $explorer;

    /**
     * @var MediumHAxis
     */
    protected $hAxis;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    use SelectionModeTrait;

    /**
     * @var SizeAxis
     */
    protected $sizeAxis;

    /**
     * If true, sorts the bubbles by size so the smaller bubbles appear above the larger bubbles. If false, bubbles
     * are sorted according to their order in the DataTable.
     *
     * @var bool
     */
    protected $sortBubblesBySize;

    /**
     * @var BasicTooltip
     */
    protected $tooltip;

    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->bubble = new Bubble();
        $this->colorAxis = new ColorAxis();
        $this->explorer = new Explorer();
        $this->hAxis = new MediumHAxis();
        $this->legend = new AdvancedLegend();
        $this->sizeAxis = new SizeAxis();
        $this->tooltip = new BasicTooltip();
    }

    public function getAnimation(): AdvancedAnimation
    {
        return $this->animation;
    }

    public function getBubble(): Bubble
    {
        return $this->bubble;
    }

    public function getColorAxis(): ColorAxis
    {
        return $this->colorAxis;
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

    public function getSizeAxis(): SizeAxis
    {
        return $this->sizeAxis;
    }

    public function getTooltip(): BasicTooltip
    {
        return $this->tooltip;
    }

    /**
     * @return $this
     */
    public function setSortBubblesBySize(bool $sortBubblesBySize)
    {
        $this->sortBubblesBySize = $sortBubblesBySize;

        return $this;
    }
}
