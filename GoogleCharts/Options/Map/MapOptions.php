<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Map;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineWidthTrait;

/**
 * @author Christophe Meneses
 */
class MapOptions implements ChartOptionsInterface
{
    /**
     * If set to true, enables zooming in and out using the mouse scroll wheel.
     *
     * @var bool
     */
    protected $enableScrollWheel;

    /**
     * Holds set(s) of custom markers. Each marker set can specify a normal and selected marker image. Can set a
     * default set by setting the default option, or custom marker sets by setting a unique marker ID.
     *
     * ['default' => ['normal' => '/path/to/marker/image', 'selected' => '/path/to/marker/image'],
     *  'customMarker' => ['normal' => '/path/to/other/marker/image', 'selected' => '/path/to/other/marker/image']]
     *
     * @var array
     */
    protected $icons;

    /**
     * If showLine is true, defines the line color. For example: '#800000'.
     *
     * @var bool
     */
    protected $lineColor;

    use LineWidthTrait;

    /**
     * An object containing properties of a custom map type. This custom map type will be accessed by the mapTypeId
     * you specify for the custom map type. A new mapTypeId must be given for each custom map type created. Each custom
     * map type should contain two properties :
     *    name: The display name for the styled map type
     *    styles: An array containing the style objects for the styled map type.
     *
     * @var array
     */
    protected $maps;

    /**
     * The type of map to show. Possible values are 'normal', 'terrain', 'satellite', 'hybrid', or the ID of a custom
     * map type, if any were created.
     *
     * @var string
     */
    protected $mapType;

    /**
     * If using the map type control (useMapTypeControl: true), the IDs specified in this array will be the only map
     * types displayed in the map type control. If this option is not set, the map type control will default to the
     * standard Google Maps map type control options plus any custom map types that may be available.
     *
     * @var array
     */
    protected $mapTypeIds;

    /**
     * If set to true, shows a Google Maps polyline through all the points.
     *
     * @var bool
     */
    protected $showLine;

    /**
     * If set to true, shows the location description as a tooltip when the mouse is positioned above a point marker.
     *
     * @var bool
     */
    protected $showTip;

    /**
     * Show a map type selector that enables the viewer to switch between [map, satellite, hybrid, terrain]. When
     * useMapTypeControl is false (default) no selector is presented and the type is determined by the mapType option.
     *
     * @var bool
     */
    protected $useMapTypeControl;

    /**
     * An integer indicating the initial zoom level of the map, where 0 is completely zoomed out (whole world) and 19
     * is the maximum zoom level.
     *
     * @var int
     */
    protected $zoomLevel;

    /**
     * @param bool $enableScrollWheel
     *
     * @return $this
     */
    public function setEnableScrollWheel($enableScrollWheel)
    {
        $this->enableScrollWheel = $enableScrollWheel;

        return $this;
    }

    /**
     * @param array $icons
     *
     * @return $this
     */
    public function setIcons($icons)
    {
        $this->icons = $icons;

        return $this;
    }

    /**
     * @param bool $lineColor
     *
     * @return $this
     */
    public function setLineColor($lineColor)
    {
        $this->lineColor = $lineColor;

        return $this;
    }

    /**
     * @param array $maps
     *
     * @return $this
     */
    public function setMaps($maps)
    {
        $this->maps = $maps;

        return $this;
    }

    /**
     * @param string $mapType
     *
     * @return $this
     */
    public function setMapType($mapType)
    {
        $this->mapType = $mapType;

        return $this;
    }

    /**
     * @param array $mapTypeIds
     *
     * @return $this
     */
    public function setMapTypeIds($mapTypeIds)
    {
        $this->mapTypeIds = $mapTypeIds;

        return $this;
    }

    /**
     * @param bool $showLine
     *
     * @return $this
     */
    public function setShowLine($showLine)
    {
        $this->showLine = $showLine;

        return $this;
    }

    /**
     * @param bool $showTip
     *
     * @return $this
     */
    public function setShowTip($showTip)
    {
        $this->showTip = $showTip;

        return $this;
    }

    /**
     * @param bool $useMapTypeControl
     *
     * @return $this
     */
    public function setUseMapTypeControl($useMapTypeControl)
    {
        $this->useMapTypeControl = $useMapTypeControl;

        return $this;
    }

    /**
     * @param int $zoomLevel
     *
     * @return $this
     */
    public function setZoomLevel($zoomLevel)
    {
        $this->zoomLevel = $zoomLevel;

        return $this;
    }
}
