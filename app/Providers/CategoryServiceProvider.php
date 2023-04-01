<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Contracts\CategoryContract;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            CategoryContract::class,
            CategoryRepository::class
        );
    }
}
