<?php

namespace Adichan\Product;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Adichan\Product\Skeleton\SkeletonClass
 */
class ProductFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'product';
    }
}
