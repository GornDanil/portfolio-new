<?php

namespace App\Providers;

use App\Services\Web\Abstracts\PostServiceInterface;
use App\Services\Web\PostService;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * All of the container singletons that should be registered.
     *
     * @var array<string|int, \Closure(Container, array<mixed>):mixed|string|null>
     */
    public array $singletons = [
        PostServiceInterface::class => PostService::class,
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
