<?php

namespace CMEN\GoogleChartsBundle\Output\Javascript;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\Output\AbstractOptionsOutput;

/**
 * @author Christophe Meneses
 */
class OptionsOutput extends AbstractOptionsOutput
{
    /**
     * {@inheritdoc}
     */
    public function draw(ChartOptionsInterface $options, $optionsName)
    {
        $this->removeRecursivelyNullValue($options);

        /* @var array $options */
        $this->removeRecursivelyEmptyArray($options);

        $options = $this->renameRecursivelyKeys($options);

        return "var $optionsName = ".json_encode($options).";\n";
    }
}
