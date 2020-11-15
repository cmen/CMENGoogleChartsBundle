<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Material;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\TitleTrait;

/**
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
     * @return Chart
     */
    public function setSubtitle(string $subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }
}
