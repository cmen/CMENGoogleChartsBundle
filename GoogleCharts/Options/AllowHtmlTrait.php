<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
trait AllowHtmlTrait
{
    /**
     * If set to true, any annotation text that includes HTML tags will be rendered as HTML.
     *
     * Default: false
     *
     * @var bool
     */
    protected $allowHtml;

    /**
     * @param bool $allowHtml
     *
     * @return $this
     */
    public function setAllowHtml($allowHtml)
    {
        $this->allowHtml = $allowHtml;

        return $this;
    }
}
