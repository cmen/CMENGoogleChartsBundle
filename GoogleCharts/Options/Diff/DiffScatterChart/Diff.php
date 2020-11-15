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

    public function __construct()
    {
        $this->newData = new NewData();
        $this->oldData = new OldData();
    }

    public function getNewData(): NewData
    {
        return $this->newData;
    }

    public function getOldData(): OldData
    {
        return $this->oldData;
    }
}
