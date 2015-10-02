<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options\GeoChart;

use CMENGoogleChartsBundle\GoogleCharts\Options\TextStyle;

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
     * @var TextStyle
     */
    protected $textStyle;


    public function __construct()
    {
        $this->textStyle = new TextStyle();
    }


    /**
     * @return TextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @param string $numberFormat
     */
    public function setNumberFormat($numberFormat)
    {
        $this->numberFormat = $numberFormat;
    }
}
