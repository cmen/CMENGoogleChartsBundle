<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait IsStackedTrait
{
    /**
     * If set to true, stacks the elements for all series at each domain value. The isStacked option also supports
     * 100% stacking, where the stacks of elements at each domain value are rescaled to add up to 100%.
     *
     * The options for isStacked are:
     * false — elements will not stack. This is the default option.
     * true — stacks elements for all series at each domain value.
     * 'percent' — stacks elements for all series at each domain value and rescales them such that they add up to
     * 100%, with each element's value calculated as a percentage of 100%.
     * 'relative' — stacks elements for all series at each domain value and rescales them such that they add up to 1,
     * with each element's value calculated as a fraction of 1.
     * 'absolute' — functions the same as isStacked: true.
     *
     * For 100% stacking, the calculated value for each element will appear in the tooltip after its actual value.
     * The target axis will default to tick values based on the relative 0-1 scale as fractions of 1 for 'relative',
     * and 0-100% for 'percent' (Note: when using the 'percent' option, the axis/tick values are displayed as
     * percentages, however the actual values are the relative 0-1 scale values. This is because the percentage axis
     * ticks are the result of applying a format of "#.##%" to the relative 0-1 scale values. When using isStacked :
     * 'percent', be sure to specify any ticks/gridlines using the relative 0-1 scale values). You can customize the
     * gridlines/tick values and formatting using the appropriate hAxis/vAxis options.
     * 100% stacking only supports data values of type number, and must have a baseline of zero.
     *
     * Default: false
     *
     * @var bool|string
     */
    protected $isStacked;

    /**
     * @param bool|string $isStacked
     *
     * @return $this
     */
    public function setIsStacked($isStacked)
    {
        $this->isStacked = $isStacked;

        return $this;
    }
}
