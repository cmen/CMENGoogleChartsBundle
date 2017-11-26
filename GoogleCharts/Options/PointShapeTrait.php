<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait PointShapeTrait
{
    /**
     * The shape of individual data elements: 'circle', 'triangle', 'square', 'diamond', 'star', or 'polygon'.
     *
     * Default: 'circle'
     *
     * @var string
     */
    protected $pointShape;

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
}
