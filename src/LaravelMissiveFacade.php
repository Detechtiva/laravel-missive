<?php

namespace Detechtiva\LaravelMissive;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Detechtiva\LaravelMissive\Skeleton\SkeletonClass
 */
class LaravelMissiveFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-missive';
    }
}
