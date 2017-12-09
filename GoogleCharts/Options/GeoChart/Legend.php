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

    /**
     * Legend constructor.
     */
    public function __construct()
    {
        $this->textStyle = new MediumTextStyle();
    }

    /**
     * @return MediumTextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @param string $numberFormat
     *
     * @return $this
     */
    public function setNumberFormat($numberFormat)
    {
        $this->numberFormat = $numberFormat;

        return $this;
    }
}
