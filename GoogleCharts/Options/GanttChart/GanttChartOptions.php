<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\HeightTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\WidthTrait;

/**
 * @author Christophe Meneses
 */
class GanttChartOptions implements ChartOptionsInterface
{
    /**
     * @var BackgroundColor
     */
    protected $backgroundColor;

    use HeightTrait;

    /**
     * @var Gantt
     */
    protected $gantt;

    use WidthTrait;

    public function __construct()
    {
        $this->backgroundColor = new BackgroundColor();
        $this->gantt = new Gantt();
    }

    public function getBackgroundColor(): BackgroundColor
    {
        return $this->backgroundColor;
    }

    public function getGantt(): Gantt
    {
        return $this->gantt;
    }
}
