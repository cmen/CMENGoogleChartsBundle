<?php

namespace CMEN\GoogleChartsBundle\Output;

/**
 * @author Christophe Meneses
 */
interface DateOutputInterface
{
    /**
     * Returns a string to draw a DateTimeInterface object.
     */
    public function draw(\DateTimeInterface $date): string;
}
