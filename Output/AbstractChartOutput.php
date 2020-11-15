<?php

namespace CMEN\GoogleChartsBundle\Output;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Chart;

/**
 * @author Christophe Meneses
 */
abstract class AbstractChartOutput implements ChartOutputInterface
{
    /**
     * Version of Google Charts used.
     *
     * @var string
     */
    protected $version;

    /**
     * Locale to customize currencies, dates, and numbers.
     *
     * @var string
     */
    protected $language;

    public function __construct(string $version, string $language)
    {
        $this->version = $version;
        $this->language = $language;
    }

    /**
     * @return $this
     */
    public function setLanguage(string $language): ChartOutputInterface
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Checks if all elements ID are string and same number as charts.
     *
     * @param Chart[]  $charts
     * @param string[] $elementsID
     *
     * @throws GoogleChartsException
     */
    protected function checkElementsId(array $charts, array $elementsID): void
    {
        if (count($charts) != count($elementsID)) {
            throw new GoogleChartsException('Array charts and array HTML elements ID do not have the same number of element.');
        }

        foreach ($elementsID as $elementId) {
            if (!is_string($elementId)) {
                throw new GoogleChartsException('A string is expected for HTML element ID.');
            }
        }
    }

    /**
     * Checks if all elements of an array are instances of Chart. Throws an exception if not.
     *
     * @param Chart[] $charts
     *
     * @throws GoogleChartsException
     */
    protected function checkChartsTypes(array $charts): void
    {
        foreach ($charts as $chart) {
            if (!$chart instanceof Chart) {
                throw new GoogleChartsException('An array of Chart is expected.');
            }
        }
    }
}
