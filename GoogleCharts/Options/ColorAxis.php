<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

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

    use ColorsTrait;

    /**
     * @param int $minValue
     *
     * @return $this
     */
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;

        return $this;
    }

    /**
     * @param int $maxValue
     *
     * @return $this
     */
    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;

        return $this;
    }

    /**
     * @param int[] $values
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->values = $values;

        return $this;
    }
}
