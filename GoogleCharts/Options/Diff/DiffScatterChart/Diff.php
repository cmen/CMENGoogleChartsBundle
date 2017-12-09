<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffScatterChart;

/**
 * @author Christophe Meneses
 */
class Diff
{
    /**
     * @var NewData
     */
    protected $newData;

    /**
     * @var OldData
     */
    protected $oldData;

    /**
     * Diff constructor.
     */
    public function __construct()
    {
        $this->newData = new NewData();
        $this->oldData = new OldData();
    }

    /**
     * @return NewData
     */
    public function getNewData()
    {
        return $this->newData;
    }

    /**
     * @return OldData
     */
    public function getOldData()
    {
        return $this->oldData;
    }
}
