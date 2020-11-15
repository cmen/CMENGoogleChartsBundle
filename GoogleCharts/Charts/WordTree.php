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

    public function getType(): string
    {
        return 'WordTree';
    }

    public function getPackage(): string
    {
        return 'wordtree';
    }

    public function getAvailableEventTypes(): array
    {
        return [
            EventType::READY,
            EventType::SELECT,
        ];
    }

    public function getOptions(): WordTreeOptions
    {
        return $this->options;
    }

    /**
     * @param WordTreeOptions $options
     */
    public function setOptions(/* WordTreeOptions */$options): WordTree
    {
        $this->options = $options;

        return $this;
    }
}
