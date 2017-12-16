<?php

namespace CMEN\GoogleChartsBundle\Output\Javascript;

use CMEN\GoogleChartsBundle\Exception\GoogleChartsException;
use CMEN\GoogleChartsBundle\GoogleCharts\Data;
use CMEN\GoogleChartsBundle\Output\DataOutputInterface;

/**
 * @author Christophe Meneses
 */
class DataOutput implements DataOutputInterface
{
    /**
     * {@inheritdoc}
     */
    public function draw(Data $data, $dataName)
    {
        $arrayToDataTable = $data->getArrayToDataTable();

        if (!$arrayToDataTable) {
            throw new GoogleChartsException(
                'There is no data for chart. Use method setArrayToDataTable() to provide data.'
            );
        }

        $js = "var $dataName = new google.visualization.arrayToDataTable([";

        end($arrayToDataTable);
        $lastKeyRow = key($arrayToDataTable);
        foreach ($data->getArrayToDataTable() as $keyRow => $row) {
            $js .= '[';

            end($row);
            $lastKeyValue = key($row);
            foreach ($row as $key => $value) {
                if ($value instanceof \DateTime) {
                    $js .= 'new Date('.$value->format('Y').', '.($value->format('n') - 1).', '.
                        $value->format('d').', '.$value->format('H').', '.$value->format('i').', '.
                        $value->format('s').')';
                } else {
                    $js .= json_encode($value);
                }

                if ($key != $lastKeyValue) {
                    $js .= ', ';
                }
            }
            unset($value);
            $js .= ']';

            if ($keyRow != $lastKeyRow) {
                $js .= ', ';
            }
        }
        unset($row);

        $data->isFirstRowIsData() ? $js .= '], true);' : $js .= '], false);';

        return $js;
    }
}
