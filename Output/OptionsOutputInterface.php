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
     * @param ChartOptionsInterface|array<mixed> $options ChartOptions instance or an array of options passed by reference
     */
    public function removeRecursivelyNullValue(&$options): void;

    /**
     * Removes recursively array elements that have an empty array.
     *
     * @param array<mixed> $options Array of options passed by reference
     */
    public function removeRecursivelyEmptyArray(array &$options): void;

    /**
     * Renames recursively array keys to remove prefixes and suffixes "\x00". They come from conversion of class with
     * protected properties to an array.
     *
     * @param array<mixed> $options Array of options
     *
     * @return array<mixed> Array of options with new keys
     */
    public function renameRecursivelyKeys(array $options): array;

    /**
     * Returns a string to draw options. Multilevel of options are possible. A level of option can be a class of option,
     * a string or an array. If an option have a null value, an empty array or an empty class, it is not returned :
     * the default value will be applied.
     */
    public function draw(ChartOptionsInterface $options, string $optionsName): string;
}
