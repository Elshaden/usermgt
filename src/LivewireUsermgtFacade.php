<?php

namespace Elshaden\LivewireUsermgt;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elshaden\LivewireUsermgt\LivewireUsermgt
 */
class LivewireUsermgtFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'livewire-usermgt';
    }
}
