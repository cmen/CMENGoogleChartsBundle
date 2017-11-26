<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait ItalicTrait
{
    /**
     * @var boolean
     */
    protected $italic;

    /**
     * @param boolean $italic
     *
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->italic = $italic;

        return $this;
    }
}
