<?php

namespace CMEN\GoogleChartsBundle\Output\Javascript;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Diff\DiffChart;
use CMEN\GoogleChartsBundle\Output\AbstractChartOutput;
use CMEN\GoogleChartsBundle\Output\DataOutputInterface;
use CMEN\GoogleChartsBundle\Output\EventsOutputInterface;
use CMEN\GoogleChartsBundle\Output\OptionsOutputInterface;

/**
 * @author Christophe Meneses
 */
class ChartOutput extends AbstractChartOutput
{
    /** @var OptionsOutputInterface */
    private $optionsOutput;

    /** @var DataOutputInterface */
    private $dataOutput;

    /** @var EventsOutputInterface */
    private $eventsOutput;

    public function __construct(
        string $version,
        string $language,
        OptionsOutputInterface $optionsOutput,
        DataOutputInterface $dataOutput,
        EventsOutputInterface $eventsOutput
    ) {
        parent::__construct($version, $language);

        $this->optionsOutput = $optionsOutput;
        $this->dataOutput = $dataOutput;
        $this->eventsOutput = $eventsOutput;
    }

    public function startChart(Chart $chart): string
    {
        if (null === $chart->getElementID()) {
            throw new GoogleChartsException('Container is not defined.');
        }

        $js = 'var '.$chart->getName().' = new google.'.$chart->getLibrary().'.'.$chart->getType().
            '(document.getElementById("'.$chart->getElementID().'"));';

        if (!$chart instanceof DiffChart) {
            $js .= $this->dataOutput->draw($chart->getData(), $chart->getDataName());
        } else {
            $js .= $this->dataOutput->draw($chart->getOldChart()->getData(), 'old_'.$chart->getDataName()).
                $this->dataOutput->draw($chart->getNewChart()->getData(), 'new_'.$chart->getDataName()).
                'var '.$chart->getDataName().' = '.$chart->getName().
                '.computeDiff(old_'.$chart->getDataName().',
                 new_'.$chart->getDataName().');';
        }

        $js .= $this->optionsOutput->draw($chart->getOptions(), $chart->getOptionsName());

        return $js;
    }

    public function endChart(Chart $chart): string
    {
        if ('visualization' == $chart->getLibrary()) {
            $options = $chart->getOptionsName();
        } else {
            /* Options conversion for material charts */
            $options = 'google.'.$chart->getLibrary().'.'.$chart->getType().
                '.convertOptions('.$chart->getOptionsName().')';
        }

        return $this->eventsOutput->draw($chart->getEvents(), $chart->getName()).$chart->getName().
            '.draw('.$chart->getDataName().', '.$options.');';
    }

    public function startCharts($charts, $elementsID = null): string
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
                if (!is_array($elementsID)) {
                    throw new GoogleChartsException('An array of string is expected for HTML elements IDs.');
                }

                $this->checkElementsId($charts, $elementsID);
            }
        } else {
            throw new GoogleChartsException('An instance of Chart or an array of Chart is expected.');
        }

        $packages = [];
        $drawChartName = '';
        $nbCharts = count($charts);
        for ($i = 0; $i < $nbCharts; ++$i) {
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
            $js .= $this->startChart($chart);
        }

        return $js;
    }

    public function endCharts($charts): string
    {
        if ($charts instanceof Chart) {
            $js = $this->endChart($charts).$this->endCallback();
        } elseif (is_array($charts) && !empty($charts)) {
            $this->checkChartsTypes($charts);

            $js = '';
            foreach ($charts as $chart) {
                $js .= $this->endChart($chart);
            }

            $js .= $this->endCallback();
        } else {
            throw new GoogleChartsException('An instance of Chart or an array of Chart is expected.');
        }

        return $js;
    }

    public function fullCharts($charts, $elementsID = null): string
    {
        return $this->startCharts($charts, $elementsID).$this->endCharts($charts);
    }

    public function loadLibraries(array $packages): string
    {
        array_walk($packages, function (&$item) {
            $item = "'".$item."'";
        });

        ($this->language) ? $language = ", language: '".$this->language."'" : $language = '';

        $load = "'".$this->version."', {packages:[".implode(',', $packages).']'.$language.'}';

        return "google.charts.load($load);";
    }

    public function startCallback(string $name): string
    {
        return "google.charts.setOnLoadCallback($name); function $name() {";
    }

    public function endCallback(): string
    {
        return '}';
    }
}
