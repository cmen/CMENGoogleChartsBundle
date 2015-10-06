<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;

/**
 * @author Christophe Meneses
 */
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

            $js .= "data.addRows([\n";

            end($this->rows);
            $lastKeyRow = key($this->rows);
            foreach ($this->rows as $keyRow => $row) {
                $js .= '[';

                end($row);
                $lastKeyValue = key($row);
                foreach ($row as $key => $value) {
                    if (is_string($value)) {
                        $js .= '"' . $value . '"';

                    } elseif ($value instanceof \DateTime) {
                        if ($this->columns[$key]->getType() == 'date') {
                            $js .= 'new Date(' . $value->format('Y') . ', ' . $value->format('n') . ', ' .
                                $value->format('d') . ')';
                        } else {
                            $js .= 'new Date(' . $value->format('Y') . ', ' . $value->format('n') . ', ' .
                                $value->format('d') . ', ' . $value->format('H') . ', ' . $value->format('i') .
                                ', ' . $value->format('s') . ')';
                        }
                    } else {
                        $js .= $value;
                    }

                    if ($key != $lastKeyValue) {
                        $js .= ', ';
                    }
                }
                $js .= ']';

                if ($keyRow != $lastKeyRow) {
                    $js .= ",\n";
                } else {
                    $js .= "\n";
                }
            }
            $js .= "]);\n";

        } else {
            $js = "var data = new google.visualization.arrayToDataTable(" . json_encode($this->arrayToTable) . ");";
        }

        return $js;
    }
}
