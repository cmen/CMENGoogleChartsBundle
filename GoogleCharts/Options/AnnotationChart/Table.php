<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\AnnotationChart;

/**
 * @author Christophe Meneses
 */
class Table
{
    /**
     * If set to true, reverses the order of the annotations table and displays them in ascending order.
     *
     * @var bool
     */
    protected $sortAscending;

    /**
     * The column index of the annotations table for which the annotations will be sorted. The index must be either 0,
     * for the annotation label column, or 1, for the annotation text column.
     *
     * @var int
     */
    protected $sortColumn;

    /**
     * @return $this
     */
    public function setSortAscending(bool $sortAscending)
    {
        $this->sortAscending = $sortAscending;

        return $this;
    }

    /**
     * @return $this
     */
    public function setSortColumn(int $sortColumn)
    {
        $this->sortColumn = $sortColumn;

        return $this;
    }
}
