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
    /** @var DateOutputInterface */
    private $dateOutput;

    /**
     * DataOutput constructor.
     */
    public function __construct(DateOutputInterface $dateOutput)
    {
        $this->dateOutput = $dateOutput;
    }

    /**
     * {@inheritdoc}
     */
    public function draw(Data $data, $dataName)
    {
        $arrayToDataTable = $data->getArrayToDataTable();

        if (!$arrayToDataTable) {
            throw new GoogleChartsException('There is no data for chart. Use method setArrayToDataTable() to provide data.');
        }

        $js = "var $dataName = new google.visualization.arrayToDataTable([";

        end($arrayToDataTable);
        $lastKeyRow = key($arrayToDataTable);
        foreach ($data->getArrayToDataTable() as $keyRow => $row) {
            $js .= '[';

            end($row);
            $lastKeyValue = key($row);
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
