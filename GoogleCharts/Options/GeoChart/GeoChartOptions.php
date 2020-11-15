<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GeoChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedBackgroundColor;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorAxis;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MagnifyingGlass;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\SizeAxis;

/**
 * @author Christophe Meneses
 */
class GeoChartOptions extends ChartOptions
{
    /**
     * @var string|AdvancedBackgroundColor
     */
    protected $backgroundColor;

    /**
     * @var ColorAxis
     */
    protected $colorAxis;

    /**
     * Color to assign to regions with no associated data.
     *
     * @var string
     */
    protected $datalessRegionColor;

    /**
     * The color to use when for data points in a Geochart when the location (e.g., 'US' ) is present but the value is
     * either null or unspecified. This is distinct from datalessRegionColor, which is the color used when data is
     * missing.
     *
     * @var string
     */
    protected $defaultColor;

    /**
     * Which type of geochart this is. The DataTable format must match the value specified. The following values
     * are supported :
     *    'auto' - Choose based on the format of the DataTable.
     *    'regions' - Color the regions on the geochart.
     *    'markers' - Place markers on the regions.
     *    'text' - Label the regions with text from the DataTable.
     *
     * @var string
     */
    protected $displayMode;

    /**
     * Show the geochart as though it were being served from this region. For instance, setting domain to 'IN' will
     * display Kashmir as belonging to India rather than as a disputed territory.
     *
     * @var string
     */
    protected $domain;

    /**
     * If true, enable region interactivity, including focus and tool-tip elaboration on mouse hover, and region
     * selection and firing of regionClick and select events on mouse click.
     *
     * The default is true in region mode, and false in marker mode.
     *
     * @var bool
     */
    protected $enableRegionInteractivity;

    /**
     * If true, the geochart will be drawn at the largest size that can fit inside the chart area at its natural
     * aspect ratio. If only one of the width and height options is specified, the other one will be calculated
     * according to the aspect ratio.
     *
     * If false, the geochart will be stretched to the exact size of the chart as specified by the width and height
     * options.
     *
     * @var bool
     */
    protected $keepAspectRatio;

    /**
     * @var Legend
     */
    protected $legend;

    /**
     *  The area to display on the geochart. (Surrounding areas will be displayed as well.) Can be one of the
     * following :
     *    - 'world' - A geochart of the entire world.
     *    - A continent or a sub-continent, specified by its 3-digit code, e.g., '011' for Western Africa.
     *    - A country, specified by its ISO 3166-1 alpha-2 code, e.g., 'AU' for Australia.
     *    - A state in the United States, specified by its ISO 3166-2:US code, e.g., 'US-AL' for Alabama. Note that
     *      the resolution option must be set to either 'provinces' or 'metros'.
     *
     * @var string
     */
    protected $region;

    /**
     * @var MagnifyingGlass
     */
    protected $magnifyingGlass;

    /**
     * The opacity of the markers, where 0.0 is fully transparent and 1.0 is fully opaque.
     *
     * @var float
     */
    protected $markerOpacity;

    /**
     * The resolution of the geochart borders. Choose one of the following values :
     *    'countries' - Supported for all regions, except for US state regions.
     *    'provinces' - Supported only for country regions and US state regions. Not supported for all countries;
     *       please test a country to see whether this option is supported.
     *    'metros' - Supported for the US country region and US state regions only.
     *
     * @var string
     */
    protected $resolution;

    /**
     * @var SizeAxis
     */
    protected $sizeAxis;

    /**
     * @var Tooltip
     */
    protected $tooltip;

    public function __construct()
    {
        parent::__construct();

        $this->backgroundColor = new AdvancedBackgroundColor();
        $this->colorAxis = new ColorAxis();
        $this->legend = new Legend();
        $this->magnifyingGlass = new MagnifyingGlass();
        $this->sizeAxis = new SizeAxis();
        $this->tooltip = new Tooltip();
    }

    /**
     * @return string|AdvancedBackgroundColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    public function getColorAxis(): ColorAxis
    {
        return $this->colorAxis;
    }

    public function getLegend(): Legend
    {
        return $this->legend;
    }

    public function getMagnifyingGlass(): MagnifyingGlass
    {
        return $this->magnifyingGlass;
    }

    public function getSizeAxis(): SizeAxis
    {
        return $this->sizeAxis;
    }

    public function getTooltip(): Tooltip
    {
        return $this->tooltip;
    }

    /**
     * @return $this
     */
    public function setBackgroundColor(string $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDatalessRegionColor(string $datalessRegionColor)
    {
        $this->datalessRegionColor = $datalessRegionColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDisplayMode(string $displayMode)
    {
        $this->displayMode = $displayMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDefaultColor(string $defaultColor)
    {
        $this->defaultColor = $defaultColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setDomain(string $domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @return $this
     */
    public function setKeepAspectRatio(bool $keepAspectRatio)
    {
        $this->keepAspectRatio = $keepAspectRatio;

        return $this;
    }

    /**
     * @return $this
     */
    public function setEnableRegionInteractivity(bool $enableRegionInteractivity)
    {
        $this->enableRegionInteractivity = $enableRegionInteractivity;

        return $this;
    }

    /**
     * @return $this
     */
    public function setRegion(string $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMarkerOpacity(float $markerOpacity)
    {
        $this->markerOpacity = $markerOpacity;

        return $this;
    }

    /**
     * @return $this
     */
    public function setResolution(string $resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }
}
