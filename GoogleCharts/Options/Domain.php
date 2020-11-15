<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * Domain object lets you override Google Charts' choice for annotations provided for a domain
 * (the major axis of the chart, such as the X axis on a typical line chart).
 *
 * @author Christophe Meneses
 */
class Domain
{
    /**
     * @var Stem
     */
    protected $stem;

    /**
     * It can be either 'line' or 'point'.
     *
     * @var string
     */
    protected $style;

    public function __construct()
    {
        $this->stem = new Stem();
    }

    public function getStem(): Stem
    {
        return $this->stem;
    }

    /**
     * @return $this
     */
    public function setStyle(string $style)
    {
        $this->style = $style;

        return $this;
    }
}
