<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait BoldTrait
{
    /**
     * @var boolean
     */
    protected $bold;

    /**
     * @param boolean $bold
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->bold = $bold;

        return $this;
    }
}
