<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
use CMEN\GoogleChartsBundle\GoogleCharts\EventType;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\WordTree\WordTreeOptions;

/**
 * @author Christophe Meneses
 */
class WordTree extends Chart
{
    /**
     * @var WordTreeOptions
     */
    protected $options;

    public function __construct()
    {
        parent::__construct();

        $this->options = new WordTreeOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'WordTree';
    }

    /**
     * {@inheritdoc}
     */
    public function getPackage()
    {
        return 'wordtree';
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableEventTypes()
    {
        return [
            EventType::READY,
            EventType::SELECT,
        ];
    }

    /**
     * @return WordTreeOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options WordTreeOptions
     *
     * @return WordTree
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}
