<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

class Options
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var string
     */
    protected $legend;


    /**
     * Returns Javascript of options. If an option does not have a value, it is not returned : the default value will
     * be applied.
     *
     * @return string Javascript
     */
    public function draw()
    {
        $options = get_object_vars($this);
        foreach ($options as $key => $value) {
            if ($options[$key] === null) {
                unset($options[$key]);
            }
        }

        return "var options = ". json_encode($options) .";\n";
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @param string $legend
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;
    }
}
