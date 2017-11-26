<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsDraw;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\HeightTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\WidthTrait;

/**
 * @author Christophe Meneses
 */
class GanttChartOptions extends ChartOptionsDraw
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

    /**
     * GanttChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->backgroundColor = new BackgroundColor();
        $this->gantt = new Gantt();
    }


    /**
     * @return BackgroundColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @return Gantt
     */
    public function getGantt()
    {
        return $this->gantt;
    }
}
