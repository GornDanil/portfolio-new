<?php

namespace App\Providers;

use App\Repositories\Web\Abstracts\PostRepositoryInterface;
use App\Repositories\Web\PostRepositoryEloquent;
use Closure;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * All of the container singletons that should be registered.
     *
     * @var array<string|int, Closure(Container, array<mixed>):mixed|string|null>
     */
    public array $singletons = [
        PostRepositoryInterface::class => PostRepositoryEloquent::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
