<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait TitleTrait
{
    /**
     * Text to display for title.
     *
     * Default: no title
     *
     * @var string
     */
    protected $title;

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
