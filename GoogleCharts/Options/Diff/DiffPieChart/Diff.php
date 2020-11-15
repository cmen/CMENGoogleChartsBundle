<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffPieChart;

/**
 * @author Christophe Meneses
 */
class Diff
{
    /**
     * @var InnerCircle
     */
    protected $innerCircle;

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
        $this->innerCircle = new InnerCircle();
        $this->newData = new NewData();
        $this->oldData = new OldData();
    }

    public function getNewData(): NewData
    {
        return $this->newData;
    }

    public function getInnerCircle(): InnerCircle
    {
        return $this->innerCircle;
    }

    public function getOldData(): OldData
    {
        return $this->oldData;
    }
}
