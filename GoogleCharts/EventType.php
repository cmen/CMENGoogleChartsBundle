<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

/**
 * @author Christophe Meneses
 */
class EventType
{
    public const ANIMATION_FINISH = 'animationfinish';
    public const CLICK = 'click';
    public const COLLAPSE = 'collapse';
    public const ERROR = 'error';
    public const ON_MOUSE_OUT = 'onmouseout';
    public const ON_MOUSE_OVER = 'onmouseover';
    public const PAGE = 'page';
    public const RANGE_CHANGE = 'rangechange';
    public const READY = 'ready';
    public const REGION_CLICK = 'regionClick';
    public const ROLLUP = 'rollup';
    public const SELECT = 'select';
    public const SORT = 'sort';

    /**
     * @return string[]
     */
    public static function getAllEventTypes(): array
    {
        return [
            self::ANIMATION_FINISH,
            self::CLICK,
            self::COLLAPSE,
            self::ERROR,
            self::ON_MOUSE_OUT,
            self::ON_MOUSE_OVER,
            self::PAGE,
            self::RANGE_CHANGE,
            self::READY,
            self::REGION_CLICK,
            self::ROLLUP,
            self::SELECT,
            self::SORT,
        ];
    }
}
