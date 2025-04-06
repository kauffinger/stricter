<?php

namespace Kauffinger\Stricter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kauffinger\Stricter\Stricter
 */
class Stricter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Kauffinger\Stricter\Stricter::class;
    }
}
