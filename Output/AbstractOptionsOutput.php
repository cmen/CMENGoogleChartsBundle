<?php

namespace CMEN\GoogleChartsBundle\Output;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;

/**
 * @author Christophe Meneses
 */
abstract class AbstractOptionsOutput implements OptionsOutputInterface
{
    /**
     * Removes recursively array elements that have a null value.
     *
     * @param ChartOptionsInterface|array $options ChartOptions instance or an array of options passed by reference
     */
    public function removeRecursivelyNullValue(&$options)
    {
        $options = array_filter((array) $options, function ($val) {
            return !is_null($val);
        });

        foreach ($options as $key => $value) {
            if (is_object($value) || is_array($value)) {
                $this->removeRecursivelyNullValue($options[$key]);
            }
        }
    }

    /**
     * Removes recursively array elements that have an empty array.
     *
     * @param array $options Array of options passed by reference
     */
    public function removeRecursivelyEmptyArray(&$options)
    {
        foreach ($options as $key => $value) {
            if (is_array($value)) {
                $this->removeRecursivelyEmptyArray($options[$key]);

                if (empty($options[$key])) {
                    unset($options[$key]);
                }
            }
        }
    }

    /**
     * Renames recursively array keys to remove prefixes and suffixes "\x00". They come from conversion of class with
     * protected properties to an array.
     *
     * @param array $options Array of options
     *
     * @return array Array of options with new keys
     */
    public function renameRecursivelyKeys($options)
    {
        $newOptions = [];

        foreach ($options as $key => $value) {
            if (!is_numeric($key)) {
                $newKey = preg_replace('/\x00\*\x00/', '', $key);
                $newOptions[$newKey] = $value;

                if (is_array($options[$key])) {
                    $newOptions[$newKey] = $this->renameRecursivelyKeys($options[$key]);
                }
            } else {
                $newOptions[$key] = $value;

                if (is_array($options[$key])) {
                    $newOptions[$key] = $this->renameRecursivelyKeys($options[$key]);
                }
            }
        }

        return $newOptions;
    }
}
