<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;

/**
 * @author Christophe Meneses
 */
class Listener
{
    protected string $type;

    protected string $functionName;

    /**
     * @throws GoogleChartsException
     */
    public function __construct(string $type, string $functionName)
    {
        if (!in_array($type, EventType::getAllEventTypes())) {
            throw new GoogleChartsException("$type is not a valid type of event.");
        }

        $this->type = $type;
        $this->functionName = $functionName;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getFunction(): string
    {
        return $this->functionName;
    }
}
