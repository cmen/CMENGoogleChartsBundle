<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Animation
{
    /**
     * The duration of the animation, in milliseconds. For details, see the animation documentation.
     * {@link https://developers.google.com/chart/interactive/docs/animation}.
     *
     * @var int
     */
    protected $duration;

    /**
     * The easing function applied to the animation. The following options are available :
     * 'linear' - Constant speed.
     * 'in' - Ease in - Start slow and speed up.
     * 'out' - Ease out - Start fast and slow down.
     * 'inAndOut' - Ease in and out - Start slow, speed up, then slow down.
     *
     * @var string
     */
    protected $easing;

    /**
     * @return $this
     */
    public function setDuration(int $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return $this
     */
    public function setEasing(string $easing)
    {
        $this->easing = $easing;

        return $this;
    }
}
