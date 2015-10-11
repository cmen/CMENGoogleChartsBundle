<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GanttChart;

/**
 * @author Christophe Meneses
 */
class InnerGridHorizLine
{
    /**
     * The color of any critical path arrows.
     *
     * @var string
     */
    protected $stroke;

    /**
     * The thickness of any critical path arrows.
     *
     * @var int
     */
    protected $strokeWidth;

    /**
     * @param string $stroke
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;
    }

    /**
     * @param int $strokeWidth
     */
    public function setStrokeWidth($strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;
    }
}
