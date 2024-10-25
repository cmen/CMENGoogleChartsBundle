<?php

namespace CMEN\GoogleChartsBundle\Output\Javascript;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Data;
use CMEN\GoogleChartsBundle\Output\DataOutputInterface;
use CMEN\GoogleChartsBundle\Output\DateOutputInterface;

/**
 * @author Christophe Meneses
 */
class DataOutput implements DataOutputInterface
{
    public function __construct(private readonly DateOutputInterface $dateOutput)
    {
    }

    public function draw(Data $data, string $dataName): string
    {
        $arrayToDataTable = $data->getArrayToDataTable();

        if (empty($arrayToDataTable)) {
            throw new GoogleChartsException('There is no data for chart. Use method setArrayToDataTable() to provide data.');
        }

        $js = "var $dataName = new google.visualization.arrayToDataTable([";
        $lastKeyRow = array_key_last($arrayToDataTable);
        foreach ($data->getArrayToDataTable() as $keyRow => $row) {
            $js .= '[';
            $lastKeyValue = array_key_last($row);
            foreach ($row as $key => $value) {
                if ($value instanceof \DateTimeInterface) {
                    $js .= $this->dateOutput->draw($value);
                } else {
                    $js .= json_encode($value);
                }

                if ($key != $lastKeyValue) {
                    $js .= ', ';
                }
            }
            $js .= ']';

            if ($keyRow != $lastKeyRow) {
                $js .= ', ';
            }
        }

        $data->isFirstRowIsData() ? $js .= '], true);' : $js .= '], false);';

        return $js;
    }
}
