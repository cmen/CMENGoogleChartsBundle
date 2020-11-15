<?php

namespace CMEN\GoogleChartsBundle\Output;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Chart;

/**
 * @author Christophe Meneses
 */
interface ChartOutputInterface
{
    /**
     * Returns a string to draw the beginning of the chart (Declaration, data and options).
     *
     * @throws GoogleChartsException
     */
    public function startChart(Chart $chart): string;

    /**
     * Returns a string to draw the end of the chart (Events and drawing).
     */
    public function endChart(Chart $chart): string;

    /**
     * Returns a string to draw the beginning of one or more charts.
     *
     * @param Chart|Chart[]        $charts     Chart instance or array of Chart instance
     * @param string|string[]|null $elementsID HTML element ID or array of HTML elements IDs. Can be null
     *
     * @throws GoogleChartsException
     */
    public function startCharts($charts, $elementsID = null): string;

    /**
     * Returns a string to draw the end of one or more charts.
     *
     * @param Chart|Chart[] $charts Chart instance or array of Chart instance
     *
     * @throws GoogleChartsException
     */
    public function endCharts($charts): string;

    /**
     * Returns a string to draw one or more complete charts.
     *
     * @param Chart|Chart[]        $charts     Chart instance or array of Chart instance
     * @param string|string[]|null $elementsID HTML element ID or array of HTML elements IDs. Can be null
     *
     * @throws GoogleChartsException
     */
    public function fullCharts($charts, $elementsID = null): string;

    /**
     * Returns a string to load Google libraries.
     *
     * @param string[] $packages List of packages to load
     */
    public function loadLibraries(array $packages): string;

    /**
     * Returns a string for the beginning of the callback.
     */
    public function startCallback(string $name): string;

    /**
     * Returns a string for the end of the callback.
     */
    public function endCallback(): string;

    /**
     * Sets the language used by Google for charts.
     *
     * @return $this
     */
    public function setLanguage(string $language): ChartOutputInterface;
}
