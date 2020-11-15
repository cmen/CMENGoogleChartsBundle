<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait ReverseCategoriesTrait
{
    /**
     * If set to true, will draw series from right to left. The default is to draw left-to-right.
     * This option is only supported for a discrete major axis.
     *
     * Default: false
     *
     * @var bool
     */
    protected $reverseCategories;

    /**
     * @return $this
     */
    public function setReverseCategories(bool $reverseCategories)
    {
        $this->reverseCategories = $reverseCategories;

        return $this;
    }
}
