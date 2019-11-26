<?php

namespace CMEN\GoogleChartsBundle\Output;

/**
 * @author Christophe Meneses
 */
interface DateOutputInterface
{
    /**
     * Returns a string to draw a DateTimeInterface object.
     *
     * @return string
     */
    public function draw(\DateTimeInterface $date);
}
