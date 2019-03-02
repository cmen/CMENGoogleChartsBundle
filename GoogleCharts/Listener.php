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

    /**
     * Listener constructor.
     *
     * @param string $type
     * @param string $functionName
     *
     * @throws GoogleChartsException
     */
    public function __construct($type, $functionName)
    {
        if (!in_array($type, EventType::getAllEventTypes())) {
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
