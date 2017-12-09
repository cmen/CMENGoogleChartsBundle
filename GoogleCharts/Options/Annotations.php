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

    /**
     * Annotations constructor.
     */
    public function __construct()
    {
        $this->boxStyle = new BoxStyle();
        $this->datum = new Datum();
        $this->domain = new Domain();
        $this->stem = new Stem();
        $this->textStyle = new AdvancedTextStyle();
    }

    /**
     * @return BoxStyle
     */
    public function getBoxStyle()
    {
        return $this->boxStyle;
    }

    /**
     * @return Datum
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * @return Domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @return Stem
     */
    public function getStem()
    {
        return $this->stem;
    }

    /**
     * @return AdvancedTextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @param bool $highContrast
     *
     * @return $this
     */
    public function setHighContrast($highContrast)
    {
        $this->highContrast = $highContrast;

        return $this;
    }

    /**
     * @param string $style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }
}
