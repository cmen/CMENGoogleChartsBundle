<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\GeoChart;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumTextStyle;

/**
 * @author Christophe Meneses
 */
class Legend
{
    /**
     * A format string for numeric labels. This is a subset of the ICU pattern set . For instance, {numberFormat:'.##'}
     * will display values "10.66", "10.6", and "10.0" for values 10.666, 10.6, and 10.
     *
     * @var string
     */
    protected $numberFormat;

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
    public function setNumberFormat(string $numberFormat)
    {
        $this->numberFormat = $numberFormat;

        return $this;
    }
}
