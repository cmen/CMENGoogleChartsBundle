<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

/**
 * @author Christophe Meneses
 */
class Column
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    public function __construct($type, $name)
    {
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
