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

    /**
     * Diff constructor.
     */
    public function __construct()
    {
        $this->innerCircle = new InnerCircle();
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
     * @return InnerCircle
     */
    public function getInnerCircle()
    {
        return $this->innerCircle;
    }

    /**
     * @return OldData
     */
    public function getOldData()
    {
        return $this->oldData;
    }
}
