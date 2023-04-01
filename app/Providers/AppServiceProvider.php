<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

use App\Contracts\CategoryContract;
use App\Repositories\CategoryRepository;


use App\Contracts\AttributeContract;
use App\Repositories\AttributeRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(AttributeContract::class, AttributeRepository::class);
    }

    // ...
}