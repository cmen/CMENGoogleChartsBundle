<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

/**
 * @author Christophe Meneses
 */
class Data
{
    /**
     * @var array
     */
    private $arrayToDataTable;

    /**
     * @var bool
     */
    private $firstRowIsData;

    /**
     * Data constructor.
     */
    public function __construct()
    {
        $this->arrayToDataTable = [];
        $this->firstRowIsData = false;
    }

    /**
     * @return array
     */
    public function getArrayToDataTable()
    {
        return $this->arrayToDataTable;
    }

    /**
     * This method takes in a two-dimensional array. The data types of each column are interpreted automatically from
     * the data given. If a cell has no value, specify a null or empty value as appropriate. Column data types can also
     * be specified using the object literal notation in the first row (the column header row) of the array
     * (i.e. ['label' => 'Start Date', 'type' => 'date']). Optional data roles may be used as well, but they must be
     * defined explicitly using object literal notation. Object literal notation may also be used for any cell,
     * allowing you to define Cell Objects).
     *
     * @param array $arrayToDataTable a two-dimensional array, where each row represents a row in the data table
     * @param bool  $firstRowIsData   if firstRowIsData is false (the default), the first row will be interpreted
     *                                as header labels
     */
    public function setArrayToDataTable($arrayToDataTable, $firstRowIsData = false)
    {
        $this->arrayToDataTable = $arrayToDataTable;
        $this->firstRowIsData = $firstRowIsData;
    }

    /**
     * @return bool
     */
    public function isFirstRowIsData()
    {
        return $this->firstRowIsData;
    }
}
