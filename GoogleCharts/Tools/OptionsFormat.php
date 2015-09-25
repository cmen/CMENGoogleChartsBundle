<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Tools;

use CMENGoogleChartsBundle\GoogleCharts\Options\Options;

class OptionsFormat
{
    /**
     * Removes recursively array elements that have a null value.
     *
     * @param Options|array $options Options instance or an array of options passed by reference
     */
    public function removeRecursivelyNullValue(&$options)
    {
        $options = array_filter((array)$options, function ($val) {
            return !is_null($val);
        });

        foreach ($options as $key => $value) {
            if (is_object($value)) {
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
     * Renames recursively array keys to suppress prefix and suffix \x00.
     * They come from conversion of class with protected properties to an array.
     *
     * @param $options Array of options passed by reference
     */
    public function renameRecursivelyKeys(&$options)
    {
        $oldKeys = array_keys($options);

        foreach ($options as $key => $value) {
            if (!is_numeric($key)) {
                $newKey = preg_replace('/\x00\*\x00/', '', $key);
                $options[$newKey] = $value;

                if (is_array($options[$key])) {
                    $this->renameRecursivelyKeys($options[$key]);
                }
            }
        }

        foreach ($oldKeys as $id => $key) {
            if (!is_numeric($key)) {
                unset($options[$key]);
            }
        }
    }
}
