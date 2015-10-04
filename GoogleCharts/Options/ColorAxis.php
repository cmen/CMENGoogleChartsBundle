<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class ColorAxis
{
    /**
     * If present, specifies a minimum value for chart color data. Color data values of this value and lower will be
     * rendered as the first color in the colorAxis.colors range.
     *
     * @var int
     */
    protected $minValue;

    /**
     * If present, specifies a maximum value for chart color data. Color data values of this value and higher will be
     * rendered as the last color in the colorAxis.colors range.
     *
     * @var int
     */
    protected $maxValue;

    /**
     * If present, controls how values are associated with colors. Each value is associated with the corresponding
     * color in the colorAxis.colors array. These values apply to the chart color data. Coloring is done according to
     * a gradient of the values specified here. Not specifying a value for this option is equivalent to specifying
     * [minValue, maxValue].
     *
     * @var int[]
     */
    protected $values;

    /**
     * Colors to assign to values in the visualization. An array of strings, where each element is an HTML color string,
     * for example: colorAxis: {colors:['red','#004411']}. You must have at least two values; the gradient will include
     * all your values, plus calculated intermediary values, with the first color as the smallest value, and the last
     * color as the highest.
     *
     * @var string[]
     */
    protected $colors;


    /**
     * @param int $minValue
     */
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;
    }

    /**
     * @param int $maxValue
     */
    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;
    }

    /**
     * @param int[] $values
     */
    public function setValues($values)
    {
        $this->values = $values;
    }

    /**
     * @param string[] $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
    }
}
