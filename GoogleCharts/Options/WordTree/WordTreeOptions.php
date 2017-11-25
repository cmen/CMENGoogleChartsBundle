<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\WordTree;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\ColorsTrait;

/**
 * @author Christophe Meneses
 */
class WordTreeOptions extends ChartOptions
{
    use ColorsTrait;

    /**
     * The word tree typeface.
     *
     * @var string
     */
    protected $fontName;

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
     * @param string $fontName
     *
     * @return $this
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;

        return $this;
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
