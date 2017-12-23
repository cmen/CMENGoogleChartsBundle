<?php

namespace CMEN\GoogleChartsBundle\Output\Javascript;

use CMEN\GoogleChartsBundle\Output\DateOutputInterface;

/**
 * @author Christophe Meneses
 */
class DateOutput implements DateOutputInterface
{
    /**
     * {@inheritdoc}
     */
    public function draw(\DateTimeInterface $date)
    {
        return 'new Date('.$date->format('Y').', '.($date->format('n') - 1).', '.$date->format('j').', '.
            $date->format('H').', '.$date->format('i').', '.$date->format('s').')';
    }
}
