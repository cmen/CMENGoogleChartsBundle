<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

use CMEN\GoogleChartsBundle\GoogleCharts\Tools\OptionsFormat;

/**
 * @author Christophe Meneses
 */
class ChartOptionsDraw
{
    /**
     * @var OptionsFormat
     */
    private $optionsFormat;


    public function __construct()
    {
        $this->optionsFormat = new OptionsFormat();
    }


    /**
     * Returns Javascript of options. Multilevel of options are possible. A level of option can be a class of option,
     * a string or an array. If an option have a null value, an empty array or an empty class, it is not returned :
     * the default value will be applied.
     *
     * @return string Javascript
     */
    public function draw()
    {
        $options = $this;

        $this->optionsFormat->removeRecursivelyNullValue($options);

        $this->optionsFormat->removeRecursivelyEmptyArray($options);

        $options = $this->optionsFormat->renameRecursivelyKeys($options);

        return "var options = " . json_encode($options) . ";\n";
    }
}
