<?php
namespace Kernel\Providers;
use Illuminate\Support\ServiceProvider;

use Kernel\UseCases\User\GetAllInterface;
use Kernel\UseCases\User\GetAllInteractor;

use Kernel\UseCases\User\StoreInterface;
use Kernel\UseCases\User\StoreInteractor;


use Kernel\Domain\Repositories\UserRepositoryInterface;
use Kernel\Infrastructure\Eloquent\UserRepository;
 
class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        // repo
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        // viewAll
        $this->app->bind(
            GetAllInterface::class,
            GetAllInteractor::class
        );
        // register
        $this->app->bind(
            StoreInterface::class,
            StoreInteractor::class
        );
    }
    public function boot()
    {
        //
    }
}
