<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

/**
 * @author Christophe Meneses
 */
class EventType
{
    const ANIMATION_FINISH = 'animationfinish';
    const CLICK = 'click';
    const COLLAPSE = 'collapse';
    const ERROR = 'error';
    const ON_MOUSE_OUT = 'onmouseout';
    const ON_MOUSE_OVER = 'onmouseover';
    const PAGE = 'page';
    const RANGE_CHANGE = 'rangechange';
    const READY = 'ready';
    const REGION_CLICK = 'regionClick';
    const ROLLUP = 'rollup';
    const SELECT = 'select';
    const SORT = 'sort';

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
