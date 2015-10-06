<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

use CMEN\GoogleChartsBundle\GoogleCharts\Tools\OptionsFormat;

/**
 * Beta fixture
 *
 * @author Christophe Meneses
 */
class MaterialChartOptions
{
    /**
     * @var Chart
     */
    protected $chart;

    /**
     * @var OptionsFormat
     */
    private $optionsFormat;


    public function __construct()
    {
        $this->chart = new Chart();
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

    /**
     * @return Chart
     */
    public function getChart()
    {
        return $this->chart;
    }
}
