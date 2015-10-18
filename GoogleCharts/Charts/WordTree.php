<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Charts;

use CMEN\GoogleChartsBundle\GoogleCharts\Chart;
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
     * @inheritdoc
     */
    protected function getType()
    {
        return 'WordTree';
    }

    /**
     * @inheritdoc
     */
    protected function getLibrary()
    {
        return 'visualization';
    }

    /**
     * @inheritdoc
     */
    protected function getPackage()
    {
        return 'wordtree';
    }

    /**
     * @return WordTreeOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
