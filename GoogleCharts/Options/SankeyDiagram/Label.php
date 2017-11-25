<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\SankeyDiagram;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontNameTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontSizeTrait;

/**
 * @author Christophe Meneses
 */
class Label
{
    use ColorTrait;

    use FontNameTrait;

    use FontSizeTrait;

    /**
     * @var boolean
     */
    protected $bold;

    /**
     * @var boolean
     */
    protected $italic;

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
