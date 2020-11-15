<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait TitlePositionTrait
{
    /**
     * Where to place the chart title, compared to the chart area. Supported values:
     * in - Draw the title inside the chart area.
     * out - Draw the title outside the chart area.
     * none - Omit the title.
     *
     * Default: 'out'
     *
     * @var string
     */
    protected $titlePosition;

    /**
     * @return $this
     */
    public function setTitlePosition(string $titlePosition)
    {
        $this->titlePosition = $titlePosition;

        return $this;
    }
}
