<?php

namespace CMENGoogleChartsBundle\GoogleCharts;

use CMENGoogleChartsBundle\Exception\GoogleChartsException;

class Data
{
    /**
     * @var Column[]
     */
    private $columns;

    /**
     * @var integer
     */
    private $nbColumns = 0;

    /**
     * @var array
     */
    private $rows;

    /**
     * @var array
     */
    private $arrayToTable;

    /**
     * Add a column.
     *
     * @param string $type Type of column
     * @param string $name Name of column
     *
     * @throws GoogleChartsException If type is invalid
     */
    public function addColumn($type, $name)
    {
        if (!in_array($type, array('string', 'number', 'boolean', 'date', 'datetime', 'timeofday'))) {
            throw new GoogleChartsException(
                "Invalid type, $type, for column \"$name\"."
            );
        }

        $this->columns[] = new Column($type, $name);
        $this->nbColumns++;
    }

    /**
     * Add rows.
     *
     * @param array $rows An array of rows
     *
     * @throws GoogleChartsException If rows given with size different
     */
    public function addRows($rows)
    {
        for ($i = 0; $i < count($rows); $i++) {
            if (count($rows[$i]) != $this->nbColumns) {
                throw new GoogleChartsException(
                    'Row given with size different than ' . $this->nbColumns . ' (the number of columns in the table)'
                );
            }
        }

        $this->rows = $rows;
    }

    /**
     * @param array $arrayToTable
     */
    public function setArrayToTable($arrayToTable)
    {
        $this->arrayToTable = $arrayToTable;
    }

    /**
     * Returns Javascript of data.
     *
     * @return string Javascript
     */
    public function draw()
    {
        if ($this->arrayToTable === null) {
            $js = "var data = new google.visualization.DataTable();\n";

            foreach ($this->columns as $column) {
                $js .= "data.addColumn('" . $column->getType() . "', '" . $column->getName() . "');\n";
            }

            $js .= "data.addRows(" . json_encode($this->rows) . ");\n";

        } else {
            $js = "var data = new google.visualization.arrayToDataTable(". json_encode($this->arrayToTable) .");";
        }

        return $js;
    }
}
