<?php

namespace CMEN\GoogleChartsBundle\Output;

/**
 * @author Christophe Meneses
 */
abstract class AbstractOptionsOutput implements OptionsOutputInterface
{
    public function removeRecursivelyNullValue(&$options): void
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

    public function removeRecursivelyEmptyArray(array &$options): void
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

    public function renameRecursivelyKeys(array $options): array
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
