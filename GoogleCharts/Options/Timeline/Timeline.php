<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Timeline;

/**
 * @author Christophe Meneses
 */
class Timeline
{
    /**
     * @var BarLabelStyle
     */
    protected $barLabelStyle;

    /**
     * If set to true, colors every bar on the row the same. The default is to use one color per bar label.
     *
     * @var bool
     */
    protected $colorByRowLabel;

    /**
     * If set to false, creates one row for every dataTable entry. The default is to collect bars with the same row
     * label into one row.
     *
     * @var bool
     */
    protected $groupByRowLabel;

    /**
     * @var RowLabelStyle
     */
    protected $rowLabelStyle;

    /**
     * If set to false, omits bar labels. The default is to show them.
     *
     * @var bool
     */
    protected $showBarLabels;

    /**
     * If set to false, omits row labels. The default is to show them.
     *
     * @var bool
     */
    protected $showRowLabels;

    /**
     * Colors all bars the same. Specified as a hex value (e.g., '#8d8').
     *
     * @var string
     */
    protected $singleColor;

    public function __construct()
    {
        $this->barLabelStyle = new BarLabelStyle();
        $this->rowLabelStyle = new RowLabelStyle();
    }

    public function getBarLabelStyle(): BarLabelStyle
    {
        return $this->barLabelStyle;
    }

    public function getRowLabelStyle(): RowLabelStyle
    {
        return $this->rowLabelStyle;
    }

    /**
     * @return $this
     */
    public function setColorByRowLabel(bool $colorByRowLabel)
    {
        $this->colorByRowLabel = $colorByRowLabel;

        return $this;
    }

    /**
     * @return $this
     */
    public function setShowBarLabels(bool $showBarLabels)
    {
        $this->showBarLabels = $showBarLabels;

        return $this;
    }

    /**
     * @return $this
     */
    public function setShowRowLabels(bool $showRowLabels)
    {
        $this->showRowLabels = $showRowLabels;

        return $this;
    }

    /**
     * @return $this
     */
    public function setSingleColor(string $singleColor)
    {
        $this->singleColor = $singleColor;

        return $this;
    }

    /**
     * @return $this
     */
    public function setGroupByRowLabel(bool $groupByRowLabel)
    {
        $this->groupByRowLabel = $groupByRowLabel;

        return $this;
    }
}
