<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class LineSeries extends AdvancedSeries
{
    /**
     * Overrides the global lineDashStyle value for this series.
     *
     * @var int[]
     */
    protected $lineDashStyle;

    /**
     * Overrides the global lineWidth value for this series.
     *
     * @var int
     */
    protected $lineWidth;

    /**
     * Overrides the global pointShape value for this series.
     *
     * @var string
     */
    protected $pointShape;

    /**
     * Overrides the global pointSize value for this series.
     *
     * @var int
     */
    protected $pointSize;

    /**
     * Overrides the global pointsVisible value for this series.
     *
     * @var bool
     */
    protected $pointsVisible;


    /**
     * @param int[] $lineDashStyle
     *
     * @return $this
     */
    public function setLineDashStyle($lineDashStyle)
    {
        $this->lineDashStyle = $lineDashStyle;

        return $this;
    }

    /**
     * @param int $lineWidth
     *
     * @return $this
     */
    public function setLineWidth($lineWidth)
    {
        $this->lineWidth = $lineWidth;

        return $this;
    }

    /**
     * @param string $pointShape
     *
     * @return $this
     */
    public function setPointShape($pointShape)
    {
        $this->pointShape = $pointShape;

        return $this;
    }

    /**
     * @param int $pointSize
     *
     * @return $this
     */
    public function setPointSize($pointSize)
    {
        $this->pointSize = $pointSize;

        return $this;
    }

    /**
     * @param bool $pointsVisible
     *
     * @return $this
     */
    public function setPointsVisible($pointsVisible)
    {
        $this->pointsVisible = $pointsVisible;

        return $this;
    }
}
