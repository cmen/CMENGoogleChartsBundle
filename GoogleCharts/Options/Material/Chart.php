<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Material;

/**
 * Class Chart
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

    /**
     * This option specifies the title.
     *
     * @var string
     */
    protected $title;

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

    /**
     * @param string $title
     *
     * @return Chart
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
