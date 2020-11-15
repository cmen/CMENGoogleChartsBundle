<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

/**
 * @author Christophe Meneses
 */
class Data
{
    /**
     * @var array<mixed>
     */
    private $arrayToDataTable;

    /**
     * @var bool
     */
    private $firstRowIsData;

    public function __construct()
    {
        $this->arrayToDataTable = [];
        $this->firstRowIsData = false;
    }

    /**
     * @return array<mixed>
     */
    public function getArrayToDataTable(): array
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
     * @param array<mixed> $arrayToDataTable a two-dimensional array, where each row represents a row in the data table
     * @param bool         $firstRowIsData   if firstRowIsData is false (the default), the first row will be interpreted
     *                                       as header labels
     *
     * @return void
     */
    public function setArrayToDataTable(array $arrayToDataTable, bool $firstRowIsData = false)
    {
        $this->arrayToDataTable = $arrayToDataTable;
        $this->firstRowIsData = $firstRowIsData;
    }

    public function isFirstRowIsData(): bool
    {
        return $this->firstRowIsData;
    }
}
