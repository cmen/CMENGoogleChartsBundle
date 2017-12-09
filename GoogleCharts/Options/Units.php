<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Units
{
    /**
     * @var Years
     */
    protected $years;

    /**
     * @var Months
     */
    protected $months;

    /**
     * @var Days
     */
    protected $days;

    /**
     * @var Hours
     */
    protected $hours;

    /**
     * @var Minutes
     */
    protected $minutes;

    /**
     * @var Seconds
     */
    protected $seconds;

    /**
     * @var Milliseconds
     */
    protected $milliseconds;

    /**
     * Units constructor.
     */
    public function __construct()
    {
        $this->years = new Years();
        $this->months = new Months();
        $this->days = new Days();
        $this->hours = new Hours();
        $this->minutes = new Minutes();
        $this->seconds = new Seconds();
        $this->milliseconds = new Milliseconds();
    }

    /**
     * @return Years
     */
    public function getYears()
    {
        return $this->years;
    }

    /**
     * @return Months
     */
    public function getMonths()
    {
        return $this->months;
    }

    /**
     * @return Days
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @return Hours
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @return Minutes
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * @return Seconds
     */
    public function getSeconds()
    {
        return $this->seconds;
    }

    /**
     * @return Milliseconds
     */
    public function getMilliseconds()
    {
        return $this->milliseconds;
    }
}
