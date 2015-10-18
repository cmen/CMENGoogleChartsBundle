<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\WordTree;

/**
 * @author Christophe Meneses
 */
class WordTree
{
    /**
     * If implicit, the input text will be split into sentences and words, and displayed according to frequency.
     * If explicit, words and their connections are specified directly.
     *
     * @var string
     */
    protected $format;

    /**
     * For implicit word trees, the regular expression to use to break the text into sentences. The sentences are then
     * broken into words using the wordRegex option.
     *
     * @var string
     */
    protected $sentenceRegex;

    /**
     * Whether the word tree is a prefix tree (root word on the right), a suffix tree (left), or double tree (middle).
     *
     * @var string
     */
    protected $type;

    /**
     * For implicit word trees, which word to use as the root of the tree. (Note that word trees are case sensitive.)
     * This option must be specified for double word trees.
     *
     * @var string
     */
    protected $word;

    /**
     * For implicit word trees, the regular expression to use to break sentences into individual words to be displayed.
     *
     * @var string
     */
    protected $wordRegex;


    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @param string $sentenceRegex
     */
    public function setSentenceRegex($sentenceRegex)
    {
        $this->sentenceRegex = $sentenceRegex;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param string $word
     */
    public function setWord($word)
    {
        $this->word = $word;
    }

    /**
     * @param string $wordRegex
     */
    public function setWordRegex($wordRegex)
    {
        $this->wordRegex = $wordRegex;
    }
}
