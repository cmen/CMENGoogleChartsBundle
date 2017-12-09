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
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @param string $sentenceRegex
     *
     * @return $this
     */
    public function setSentenceRegex($sentenceRegex)
    {
        $this->sentenceRegex = $sentenceRegex;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $word
     *
     * @return $this
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * @param string $wordRegex
     *
     * @return $this
     */
    public function setWordRegex($wordRegex)
    {
        $this->wordRegex = $wordRegex;

        return $this;
    }
}
