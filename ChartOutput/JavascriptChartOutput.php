<?php

namespace CMEN\GoogleChartsBundle\ChartOutput;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Chart;

/**
 * @author Christophe Meneses
 */
class JavascriptChartOutput extends AbstractChartOutput
{
    /**
     * {@inheritdoc}
     */
    public function startCharts($charts, $elementsID = null)
    {
        if ($charts instanceof Chart) {
            $charts = [$charts];

            if ($elementsID) {
                if (!is_string($elementsID)) {
                    throw new GoogleChartsException('A string is expected for HTML element ID.');
                }

                $elementsID = [$elementsID];
            }
        } elseif (is_array($charts) && !empty($charts)) {
            $this->checkChartsTypes($charts);

            if (null !== $elementsID) {
                $this->checkElementsId($charts, $elementsID);
            }
        } else {
            throw new GoogleChartsException('An instance of Chart or an array of Chart is expected.');
        }

        $packages = [];
        $drawChartName = '';
        for ($i = 0; $i < count($charts); ++$i) {
            if ($elementsID) {
                $charts[$i]->setElementID($elementsID[$i]);
            }

            if (!in_array($charts[$i]->getPackage(), $packages)) {
                $packages[] = $charts[$i]->getPackage();
            }
            $drawChartName .= $charts[$i]->getElementID();
        }

        $js = $this->loadLibraries($packages);

        $js .= $this->startCallback('drawChart'.ucfirst(md5($drawChartName)));

        foreach ($charts as $chart) {
            $js .= $chart->startDraw();
        }

        return $js;
    }

    /**
     * {@inheritdoc}
     */
    public function endCharts($charts)
    {
        if ($charts instanceof Chart) {
            $js = $charts->endDraw().$this->endCallback();
        } elseif (is_array($charts) && !empty($charts)) {
            $this->checkChartsTypes($charts);

            $js = '';
            foreach ($charts as $chart) {
                $js .= $chart->endDraw();
            }

            $js .= $this->endCallback();
        } else {
            throw new GoogleChartsException('An instance of Chart or an array of Chart is expected.');
        }

        return $js;
    }

    /**
     * {@inheritdoc}
     */
    public function fullCharts($charts, $elementsID = null)
    {
        return $this->startCharts($charts, $elementsID).$this->endCharts($charts);
    }

    /**
     * {@inheritdoc}
     */
    public function loadLibraries($packages)
    {
        array_walk($packages, function (&$item) {
            $item = "'".$item."'";
        });

        ($this->language) ? $language = ", language: '".$this->language."'" : $language = '';

        $load = "'".$this->version."', {packages:[".implode(',', $packages).']'.$language.'}';

        return "google.charts.load($load);";
    }

    /**
     * {@inheritdoc}
     */
    public function startCallback($name)
    {
        return "google.charts.setOnLoadCallback($name); function $name() {";
    }

    /**
     * {@inheritdoc}
     */
    public function endCallback()
    {
        return '}';
    }

    /**
     * Checks if all elements ID are string and same number as charts.
     *
     * @param Chart[]  $charts
     * @param string[] $elementsID
     *
     * @throws GoogleChartsException
     */
    private function checkElementsId(array $charts, array $elementsID)
    {
        if (count($charts) != count($elementsID)) {
            throw new GoogleChartsException(
                'Array charts and array HTML elements ID do not have the same number of element.'
            );
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
    private function checkChartsTypes(array $charts)
    {
        foreach ($charts as $chart) {
            if (!$chart instanceof Chart) {
                throw new GoogleChartsException('An array of Chart is expected.');
            }
        }
    }
}
