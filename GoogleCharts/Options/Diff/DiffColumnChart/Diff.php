<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffColumnChart;

/**
 * @author Christophe Meneses
 */
class Diff
{
    /**
     * @var NewData
     */
    protected $newData;

    public function __construct()
    {
        $this->newData = new NewData();
    }

    public function getNewData(): NewData
    {
        return $this->newData;
    }
}
