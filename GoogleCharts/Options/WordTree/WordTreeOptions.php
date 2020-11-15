<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\WordTree;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorsTrait;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\FontNameTrait;

/**
 * @author Christophe Meneses
 */
class WordTreeOptions extends ChartOptions
{
    use ColorsTrait;

    use FontNameTrait;

    /**
     * The upper limit for font size of displayed words.
     *
     * @var int
     */
    protected $maxFontSize;

    /**
     * @var WordTree
     */
    protected $wordtree;

    public function __construct()
    {
        parent::__construct();

        $this->wordtree = new WordTree();
    }

    public function getWordtree(): WordTree
    {
        return $this->wordtree;
    }

    /**
     * @return $this
     */
    public function setMaxFontSize(int $maxFontSize)
    {
        $this->maxFontSize = $maxFontSize;

        return $this;
    }
}
