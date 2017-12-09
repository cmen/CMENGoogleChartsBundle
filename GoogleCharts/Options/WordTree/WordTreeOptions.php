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

    /**
     * WordTreeOptions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->wordtree = new WordTree();
    }

    /**
     * @return WordTree
     */
    public function getWordtree()
    {
        return $this->wordtree;
    }

    /**
     * @param int $maxFontSize
     *
     * @return $this
     */
    public function setMaxFontSize($maxFontSize)
    {
        $this->maxFontSize = $maxFontSize;

        return $this;
    }
}
