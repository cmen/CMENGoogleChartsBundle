<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\WordTree;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptions;

/**
 * @author Christophe Meneses
 */
class WordTreeOptions extends ChartOptions
{
    /**
     * A list of three colors, specified either by English name or hex value. The colors for words will be taken from
     * a spectrum that begins at the first color (the low value), moves through the middle color (neutral), and ends
     * at the last color (high).
     *
     * @var string[]
     */
    protected $colors;

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
     * @param string[] $colors
     *
     * @return WordTreeOptions
     */
    public function setColors($colors)
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * @param string $fontName
     *
     * @return WordTreeOptions
     */
    public function setFontName($fontName)
    {
        $this->fontName = $fontName;

        return $this;
    }

    /**
     * @param int $maxFontSize
     *
     * @return WordTreeOptions
     */
    public function setMaxFontSize($maxFontSize)
    {
        $this->maxFontSize = $maxFontSize;

        return $this;
    }
}
