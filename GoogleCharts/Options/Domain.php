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

    /**
     * Domain constructor.
     */
    public function __construct()
    {
        $this->stem = new Stem();
    }

    /**
     * @return Stem
     */
    public function getStem()
    {
        return $this->stem;
    }

    /**
     * @param string $style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }
}
