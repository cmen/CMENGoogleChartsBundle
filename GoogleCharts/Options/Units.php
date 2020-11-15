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

    public function getYears(): Years
    {
        return $this->years;
    }

    public function getMonths(): Months
    {
        return $this->months;
    }

    public function getDays(): Days
    {
        return $this->days;
    }

    public function getHours(): Hours
    {
        return $this->hours;
    }

    public function getMinutes(): Minutes
    {
        return $this->minutes;
    }

    public function getSeconds(): Seconds
    {
        return $this->seconds;
    }

    public function getMilliseconds(): Milliseconds
    {
        return $this->milliseconds;
    }
}
