<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * Datum object lets you override Google Charts' choice for annotations provided for individual data elements
 * (such as values displayed with each bar on a bar chart).
 *
 * @author Christophe Meneses
 */
class Datum
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
     * Datum constructor.
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
