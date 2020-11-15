<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait ItalicTrait
{
    /**
     * @var bool
     */
    protected $italic;

    /**
     * @return $this
     */
    public function setItalic(bool $italic)
    {
        $this->italic = $italic;

        return $this;
    }
}
