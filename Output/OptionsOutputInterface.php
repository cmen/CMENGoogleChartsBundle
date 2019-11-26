<?php

namespace CMEN\GoogleChartsBundle\Output;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\ChartOptionsInterface;

/**
 * @author Christophe Meneses
 */
interface OptionsOutputInterface
{
    /**
     * Removes recursively array elements that have a null value.
     *
     * @param ChartOptionsInterface|array $options ChartOptions instance or an array of options passed by reference
     */
    public function removeRecursivelyNullValue(&$options);

    /**
     * Removes recursively array elements that have an empty array.
     *
     * @param array $options Array of options passed by reference
     */
    public function removeRecursivelyEmptyArray(&$options);

    /**
     * Renames recursively array keys to remove prefixes and suffixes "\x00". They come from conversion of class with
     * protected properties to an array.
     *
     * @param array $options Array of options
     *
     * @return array Array of options with new keys
     */
    public function renameRecursivelyKeys($options);

    /**
     * Returns a string to draw options. Multilevel of options are possible. A level of option can be a class of option,
     * a string or an array. If an option have a null value, an empty array or an empty class, it is not returned :
     * the default value will be applied.
     *
     * @param string $optionsName Variable name who will contain the options
     *
     * @return string
     */
    public function draw(ChartOptionsInterface $options, $optionsName);
}
