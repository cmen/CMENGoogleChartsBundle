<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\TitleTrait;

/**
 * Class Chart.
 *
 * @author Christophe Meneses
 */
class Chart
{
    /**
     * This option specifies the subtitle.
     *
     * @var string
     */
    protected $subtitle;

    use TitleTrait;

    /**
     * @param string $subtitle
     *
     * @return Chart
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }
}
