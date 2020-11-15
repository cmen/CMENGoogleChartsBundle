<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * The explorer option allows users to pan and zoom Google charts. explorer: {} provides the default explorer behavior,
 * enabling users to pan horizontally and vertically by dragging, and to zoom in and out by scrolling.
 * This feature is experimental and may change in future releases.
 *
 * @author Christophe Meneses
 */
class Explorer
{
    /**
     * The Google Charts explorer supports three actions :
     *   dragToPan: Drag to pan around the chart horizontally and vertically. To pan only along the horizontal axis,
     *     use explorer: { axis: 'horizontal' }. Similarly for the vertical axis.
     *   dragToZoom: The explorer's default behavior is to zoom in and out when the user scrolls. If explorer :
     *     { actions: ['dragToZoom', 'rightClickToReset'] } is used, dragging across a rectangular area zooms into
     *     that area. We recommend using rightClickToReset whenever dragToZoom is used. See explorer.maxZoomIn,
     *     explorer.maxZoomOut, and explorer.zoomDelta for zoom customizations.
     *   rightClickToReset: Right clicking on the chart returns it to the original pan and zoom level.
     *
     * @var string[]
     */
    protected $actions;

    /**
     * By default, users can pan both horizontally and vertically when the explorer option is used. If you want to
     * users to only pan horizontally, use explorer: { axis: 'horizontal' }. Similarly, explorer: { axis: 'vertical' }
     * enables vertical-only panning.
     *
     * @var string
     */
    protected $axis;

    /**
     * By default, users can pan all around, regardless of where the data is. To ensure that users don't pan beyond
     * the original chart, set keepInBounds true.
     *
     * @var bool
     */
    protected $keepInBounds;

    /**
     * The maximum that the explorer can zoom in. By default, users will be able to zoom in enough that they'll see
     * only 25% of the original view. Setting explorer maxZoomIn .5 would let users zoom in only far enough to
     * see half of the original view.
     *
     * @var float
     */
    protected $maxZoomIn;

    /**
     * The maximum that the explorer can zoom out. By default, users will be able to zoom out far enough that the
     * chart will take up only 1/4 of the available space. Setting explorer maxZoomOut 8 would let users zoom out far
     * enough that the chart would take up only 1/8 of the available space.
     *
     * @var float
     */
    protected $maxZoomOut;

    /**
     * When users zoom in or out, explorer.zoomDelta determines how much they zoom by. The smaller the number, the
     * smoother and slower the zoom.
     *
     * @var float
     */
    protected $zoomDelta;

    /**
     * @param string[] $actions
     *
     * @return $this
     */
    public function setActions(array $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return $this
     */
    public function setAxis(string $axis)
    {
        $this->axis = $axis;

        return $this;
    }

    /**
     * @return $this
     */
    public function setKeepInBounds(bool $keepInBounds)
    {
        $this->keepInBounds = $keepInBounds;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxZoomIn(float $maxZoomIn)
    {
        $this->maxZoomIn = $maxZoomIn;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMaxZoomOut(float $maxZoomOut)
    {
        $this->maxZoomOut = $maxZoomOut;

        return $this;
    }

    /**
     * @return $this
     */
    public function setZoomDelta(float $zoomDelta)
    {
        $this->zoomDelta = $zoomDelta;

        return $this;
    }
}
