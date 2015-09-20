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
     */
    public function addColumn($type, $name)
    {
        // TODO contrôler le type
        $this->columns[] = new Column($type, $name);
        $this->nbColumns++;
    }

    /**
     * Add rows. Rows must have the same number of columns.
     *
     * @param array $rows An array of rows
     *
     * @throws GoogleChartsException
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

    /**
     * @return Column[]
     */
    public function getColumns()
    {
        return $this->columns;
    }
//
//    /**
//     * @param Column[] $columns
//     */
//    public function setColumns($columns)
//    {
//        $this->columns = $columns;
//    }

    /**
     * @return array
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @return array
     */
/*    public function getArrayToTable()
    {
        return $this->arrayToTable;
    }*/

    /**
     * @param array $arrayToTable
     */
    public function setArrayToTable($arrayToTable)
    {
        $this->arrayToTable = $arrayToTable;
    }

//    /**
//     * @param array $rows
//     */
//    public function setRows($rows)
//    {
//        $this->rows = $rows;
//    }


}
