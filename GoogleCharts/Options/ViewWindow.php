<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class ViewWindow
{
    /**
     * The zero-based row index where the cropping window ends. Data points at this index and higher will be cropped
     * out. In conjunction with vAxis.viewWindowMode.min, it defines a half-opened range [min, max) that denotes the
     * element indices to display. In other words, every index such that min <= index < max will be displayed.
     * Ignored when hAxis.viewWindowMode is 'pretty' or 'maximized'.
     *
     * @var int
     */
    protected $max;

    /**
     *  The zero-based row index where the cropping window begins. Data points at indices lower than this will be
     * cropped out. In conjunction with vAxis.viewWindowMode.max, it defines a half-opened range [min, max) that
     * denotes the element indices to display. In other words, every index such that min <= index < max will be
     * displayed. Ignored when hAxis.viewWindowMode is 'pretty' or 'maximized'.
     *
     * @var int
     */
    protected $min;

    /**
     * @param int $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @param int $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }
}
