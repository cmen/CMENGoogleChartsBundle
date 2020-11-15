<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait BoldTrait
{
    /**
     * @var bool
     */
    protected $bold;

    /**
     * @return $this
     */
    public function setBold(bool $bold)
    {
        $this->bold = $bold;

        return $this;
    }
}
