<?php

namespace Dzaki236\ArtisanLaravelView;

use Illuminate\Support\Facades\Facade;

class ArtisanLaravelView extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'artisan-laravel-view';
    }
}
