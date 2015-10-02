<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options\GeoChart;

use CMENGoogleChartsBundle\GoogleCharts\Options\AdvancedBackgroundColor;
use CMENGoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMENGoogleChartsBundle\GoogleCharts\Options\ColorAxis;
use CMENGoogleChartsBundle\GoogleCharts\Options\MagnifyingGlass;
use CMENGoogleChartsBundle\GoogleCharts\Options\SizeAxis;
use CMENGoogleChartsBundle\GoogleCharts\Options\Tooltip;

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
     * @var boolean
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
     * @var boolean
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
     * @return AdvancedBackgroundColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @return ColorAxis
     */
    public function getColorAxis()
    {
        return $this->colorAxis;
    }

    /**
     * @return Legend
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @return MagnifyingGlass
     */
    public function getMagnifyingGlass()
    {
        return $this->magnifyingGlass;
    }

    /**
     * @return SizeAxis
     */
    public function getSizeAxis()
    {
        return $this->sizeAxis;
    }

    /**
     * @return Tooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @param string $backgroundColor
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @param string $datalessRegionColor
     */
    public function setDatalessRegionColor($datalessRegionColor)
    {
        $this->datalessRegionColor = $datalessRegionColor;
    }

    /**
     * @param string $displayMode
     */
    public function setDisplayMode($displayMode)
    {
        $this->displayMode = $displayMode;
    }

    /**
     * @param string $defaultColor
     */
    public function setDefaultColor($defaultColor)
    {
        $this->defaultColor = $defaultColor;
    }

    /**
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @param boolean $keepAspectRatio
     */
    public function setKeepAspectRatio($keepAspectRatio)
    {
        $this->keepAspectRatio = $keepAspectRatio;
    }

    /**
     * @param boolean $enableRegionInteractivity
     */
    public function setEnableRegionInteractivity($enableRegionInteractivity)
    {
        $this->enableRegionInteractivity = $enableRegionInteractivity;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @param float $markerOpacity
     */
    public function setMarkerOpacity($markerOpacity)
    {
        $this->markerOpacity = $markerOpacity;
    }

    /**
     * @param string $resolution
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
    }
}
