<?php

namespace CMEN\GoogleChartsBundle\Output\Javascript;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;
use CMEN\GoogleChartsBundle\Output\AbstractOptionsOutput;
use CMEN\GoogleChartsBundle\Output\DateOutputInterface;

/**
 * @author Christophe Meneses
 */
class OptionsOutput extends AbstractOptionsOutput
{
    /** @var DateOutputInterface */
    private $dateOutput;

    public function __construct(DateOutputInterface $dateOutput)
    {
        $this->dateOutput = $dateOutput;
    }

    public function draw(ChartOptionsInterface $options, string $optionsName): string
    {
        $this->removeRecursivelyNullValue($options);

        /* @var array $options */
        $this->removeRecursivelyEmptyArray($options);

        $options = $this->renameRecursivelyKeys($options);

        $js = "var $optionsName = {";

        end($options);
        $lastKey = key($options);
        foreach ($options as $optionKey => $optionValue) {
            $js .= '"'.$optionKey.'":';

            if (isset($optionValue['date'])) {
                $js .= $this->dateOutput->draw(new \DateTime($optionValue['date']));
            } elseif (in_array($optionKey, ['series', 'vAxes'])) {
                $js .= json_encode($optionValue, JSON_FORCE_OBJECT);
            } else {
                $js .= json_encode($optionValue);
            }

            if ($optionKey != $lastKey) {
                $js .= ', ';
            }
        }
        $js .= "};\n";

        return $js;
    }
}
