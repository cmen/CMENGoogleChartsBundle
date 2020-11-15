<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Legend
{
    /**
     * Alignment of the legend. Can be one of the following :
     * 'start' - Aligned to the start of the area allocated for the legend.
     * 'center' - Centered in the area allocated for the legend.
     * 'end' - Aligned to the end of the area allocated for the legend.
     *
     * Start, center, and end are relative to the style -- vertical or horizontal -- of the legend. For example, in a
     * 'right' legend, 'start' and 'end' are at the top and bottom, respectively; for a 'top' legend, 'start' and 'end'
     * would be at the left and right of the area, respectively.
     * The default value depends on the legend's position. For 'bottom' legends, the default is 'center'; other legends
     * default to 'start'.
     *
     * @var string
     */
    protected $alignment;

    /**
     * Position of the legend. Can be one of the following :
     * 'bottom' - Displays the legend below the chart.
     * 'labeled' - Draws lines connecting slices to their data values.
     * 'left' - Displays the legend left of the chart.
     * 'none' - Displays no legend.
     * 'right' - Displays the legend right of the chart.
     * 'top' - Displays the legend above the chart.
     *
     * @var string
     */
    protected $position;

    /**
     * @var MediumTextStyle
     */
    protected $textStyle;

    public function __construct()
    {
        $this->textStyle = new MediumTextStyle();
    }

    public function getTextStyle(): MediumTextStyle
    {
        return $this->textStyle;
    }

    /**
     * @return $this
     */
    public function setAlignment(string $alignment)
    {
        $this->alignment = $alignment;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPosition(string $position)
    {
        $this->position = $position;

        return $this;
    }
}
