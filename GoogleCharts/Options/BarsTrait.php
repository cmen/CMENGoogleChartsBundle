<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait BarsTrait
{
    /**
     *  Whether the bars in a Material Bar Chart are vertical or horizontal.
     *
     * Default: 'vertical'
     *
     * @var string
     */
    protected $bars;

    /**
     * @return $this
     */
    public function setBars(string $bars)
    {
        $this->bars = $bars;

        return $this;
    }
}
