<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;

/**
 * @author Christophe Meneses
 */
class Listener
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $functionName;


    public function __construct($type, $functionName)
    {
        if (!in_array($type, array('select', 'ready', 'click', 'error', 'onmouseover', 'onmouseout'))) {
            throw new GoogleChartsException("$type is not a valid type of event.");
        }

        $this->type = $type;
        $this->functionName = $functionName;
    }


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getFunction()
    {
        return $this->functionName;
    }
}
