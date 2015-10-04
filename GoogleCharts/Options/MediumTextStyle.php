<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class MediumTextStyle extends TextStyle
{
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
     */
    public function setBold($bold)
    {
        $this->bold = $bold;
    }

    /**
     * @param boolean $italic
     */
    public function setItalic($italic)
    {
        $this->italic = $italic;
    }
}
