<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Trendlines
{
    use ColorTrait;

    /**
     * For trendlines of type: 'polynomial', the degree of the polynomial (2 for quadratic, 3 for cubic, and so on).
     * (The default degree may change from 3 to 2 in an upcoming release of Google Charts.).
     *
     * @var int
     */
    protected $degree;

    /**
     * If set, the trendline will appear in the legend as this string.
     *
     * @var string
     */
    protected $labelInLegend;

    use LineWidthTrait;

    use OpacityTrait;

    use PointSizeTrait;

    use PointsVisibleTrait;

    /**
     * Whether to show the coefficient of determination in the legend or trendline tooltip.
     *
     * @var bool
     */
    protected $showR2;

    /**
     * Whether the trendlines is 'linear' (the default), 'exponential', or 'polynomial'.
     *
     * @var string
     */
    protected $type;

    /**
     * Whether the trendline equation appears in the legend. (It will appear in the trendline tooltip.).
     *
     * @var bool
     */
    protected $visibleInLegend;

    /**
     * @param bool $visibleInLegend
     *
     * @return $this
     */
    public function setVisibleInLegend($visibleInLegend)
    {
        $this->visibleInLegend = $visibleInLegend;

        return $this;
    }

    /**
     * @param int $degree
     *
     * @return $this
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;

        return $this;
    }

    /**
     * @param string $labelInLegend
     *
     * @return $this
     */
    public function setLabelInLegend($labelInLegend)
    {
        $this->labelInLegend = $labelInLegend;

        return $this;
    }

    /**
     * @param bool $showR2
     *
     * @return $this
     */
    public function setShowR2($showR2)
    {
        $this->showR2 = $showR2;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
