<?php

namespace Dnonov\BackgroundRemover\Facades;

use Illuminate\Support\Facades\Facade;
use Dnonov\BackgroundRemover\BackgroundRemover as BackgroundRemoverImplementation;

/*
 * BackgroundRemover facade
 *
 */
class BackgroundRemover extends Facade {
    protected static function getFacadeAccessor(): string {
        return BackgroundRemoverImplementation::class;
    }
}
