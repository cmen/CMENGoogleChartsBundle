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
