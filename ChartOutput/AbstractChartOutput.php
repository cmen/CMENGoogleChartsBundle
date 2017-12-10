<?php

namespace CMEN\GoogleChartsBundle\ChartOutput;

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

    /**
     * AbstractChartOutput constructor.
     *
     * @param string $version
     * @param string $language
     */
    public function __construct($version, $language)
    {
        $this->version = $version;
        $this->language = $language;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }
}
