<?php

namespace CMENGoogleChartsBundle\GoogleCharts;


class PieChartOptions extends Options
{
    /**
     * @var boolean
     */
    protected $is3D;

    /**
     * @return boolean
     */
    public function isIs3D()
    {
        return $this->is3D;
    }

    /**
     * @param boolean $is3D
     */
    public function setIs3D($is3D)
    {
        $this->is3D = $is3D;
    }
}
