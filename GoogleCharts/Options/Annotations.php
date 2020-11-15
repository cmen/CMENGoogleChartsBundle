<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Annotations
{
    /**
     * @var BoxStyle
     */
    protected $boxStyle;

    /**
     * @var Datum
     */
    protected $datum;

    /**
     * @var Domain
     */
    protected $domain;

    /**
     * Lets you override Google Charts' choice of the annotation color. By default, annotations.highContrast is true,
     * which causes Charts to select an annotation color with good contrast: light colors on dark backgrounds, and dark
     * on light. If you set annotations.highContrast to false and don't specify your own annotation color, Google
     * Charts will use the default series color for the annotation.
     *
     * @var bool
     */
    protected $highContrast;

    /**
     * @var Stem
     */
    protected $stem;

    /**
     * Lets you override Google Charts' choice of the annotation type. It can be either 'line' or 'point'.
     *
     * @var string
     */
    protected $style;

    /**
     * @var AdvancedTextStyle
     */
    protected $textStyle;

    public function __construct()
    {
        $this->boxStyle = new BoxStyle();
        $this->datum = new Datum();
        $this->domain = new Domain();
        $this->stem = new Stem();
        $this->textStyle = new AdvancedTextStyle();
    }

    public function getBoxStyle(): BoxStyle
    {
        return $this->boxStyle;
    }

    public function getDatum(): Datum
    {
        return $this->datum;
    }

    public function getDomain(): Domain
    {
        return $this->domain;
    }

    public function getStem(): Stem
    {
        return $this->stem;
    }

    public function getTextStyle(): AdvancedTextStyle
    {
        return $this->textStyle;
    }

    /**
     * @return $this
     */
    public function setHighContrast(bool $highContrast)
    {
        $this->highContrast = $highContrast;

        return $this;
    }

    /**
     * @return $this
     */
    public function setStyle(string $style)
    {
        $this->style = $style;

        return $this;
    }
}
