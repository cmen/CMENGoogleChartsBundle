<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options\BubbleChart;

use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedColorAxis;
use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMENGoogleChartsBundle\GoogleCharts\Options\BasicTooltip;
use CMENGoogleChartsBundle\GoogleCharts\Options\Explorer;
use CMENGoogleChartsBundle\GoogleCharts\Options\MediumHAxis;
use CMENGoogleChartsBundle\GoogleCharts\Options\SizeAxis;
use CMENGoogleChartsBundle\GoogleCharts\Options\VAxis;

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
     * @var AdvancedColorAxis
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

    /**
     * When selectionMode is 'multiple', users may select multiple data points.
     *
     * @var string
     */
    protected $selectionMode;

    /**
     * @var SizeAxis
     */
    protected $sizeAxis;

    /**
     * If true, sorts the bubbles by size so the smaller bubbles appear above the larger bubbles. If false, bubbles
     * are sorted according to their order in the DataTable.
     *
     * @var boolean
     */
    protected $sortBubblesBySize;

    /**
     * @var BasicTooltip
     */
    protected $tooltip;

    /**
     * @var VAxis
     */
    protected $vAxis;


    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->bubble = new Bubble();
        $this->colorAxis = new AdvancedColorAxis();
        $this->explorer = new Explorer();
        $this->hAxis = new MediumHAxis();
        $this->legend = new AdvancedLegend();
        $this->sizeAxis = new SizeAxis();
        $this->tooltip = new BasicTooltip();
        $this->vAxis = new VAxis();
    }


    /**
     * @return AdvancedAnimation
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * @return Bubble
     */
    public function getBubble()
    {
        return $this->bubble;
    }

    /**
     * @return AdvancedColorAxis
     */
    public function getColorAxis()
    {
        return $this->colorAxis;
    }

    /**
     * @return Explorer
     */
    public function getExplorer()
    {
        return $this->explorer;
    }

    /**
     * @return MediumHAxis
     */
    public function getHAxis()
    {
        return $this->hAxis;
    }

    /**
     * @return AdvancedLegend
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @return SizeAxis
     */
    public function getSizeAxis()
    {
        return $this->sizeAxis;
    }

    /**
     * @return BasicTooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @return VAxis
     */
    public function getVAxis()
    {
        return $this->vAxis;
    }

    /**
     * @param string $selectionMode
     */
    public function setSelectionMode($selectionMode)
    {
        $this->selectionMode = $selectionMode;
    }

    /**
     * @param boolean $sortBubblesBySize
     */
    public function setSortBubblesBySize($sortBubblesBySize)
    {
        $this->sortBubblesBySize = $sortBubblesBySize;
    }
}
