<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedChartOptions extends MediumChartOptions
{
    use AxisTitlesPositionTrait;

    use SeriesTrait;

    use ThemeTrait;

    /**
     * Where to place the chart title, compared to the chart area. Supported values:
     * in - Draw the title inside the chart area.
     * out - Draw the title outside the chart area.
     * none - Omit the title.
     *
     * @var string
     */
    protected $titlePosition;

    /**
     * @var VAxis
     */
    protected $vAxis;


    /**
     * AdvancedChartOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->vAxis = new VAxis();
    }

    /**
     * @return VAxis
     */
    public function getVAxis()
    {
        return $this->vAxis;
    }

    /**
     * @param string $titlePosition
     *
     * @return $this
     */
    public function setTitlePosition($titlePosition)
    {
        $this->titlePosition = $titlePosition;

        return $this;
    }
}
