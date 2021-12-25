<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\TitleTrait;

/**
 * @author Christophe Meneses
 */
class Chart
{
    use TitleTrait;

    /**
     * This option specifies the subtitle.
     *
     * @var string
     */
    protected $subtitle;

    /**
     * @return Chart
     */
    public function setSubtitle(string $subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }
}
