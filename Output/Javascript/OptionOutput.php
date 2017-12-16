<?php

namespace CMEN\GoogleChartsBundle\Output\Javascript;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMEN\GoogleChartsBundle\Output\AbstractOptionOutput;

/**
 * @author Christophe Meneses
 */
class OptionOutput extends AbstractOptionOutput
{
    /**
     * {@inheritdoc}
     */
    public function draw($optionsName, ChartOptions $options)
    {
        $this->removeRecursivelyNullValue($options);

        /* @var array $options */
        $this->removeRecursivelyEmptyArray($options);

        $options = $this->renameRecursivelyKeys($options);

        return "var $optionsName = ".json_encode($options).";\n";
    }
}
