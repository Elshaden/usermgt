<?php

namespace Elshaden\LivewireUsermgt;

use Elshaden\LivewireUsermgt\Commands\LivewireUsermgtCommand;
use Elshaden\LivewireUsermgt\Http\Livewire\UsersList;
use Elshaden\LivewireUsermgt\Repositories\UserRepository;

use Elshaden\LivewireUsermgt\Repositories\UserRepositoryEloquent;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireUsermgtServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-usermgt')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_usermgt_departments_table')
            ->hasCommand(LivewireUsermgtCommand::class);
    }

    public function packageRegistered()
    {
        Route::middleware(['web', 'auth'])->group(function () {
            Route::prefix(config('usermgt.route_prefix'))->group(function () {
                Route::get('/list', UsersList::class);
            });
        });
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
//        $this->app->bind('UserManagement', function(){
//            return new UserManagement();
//        });

//        ///    BIND ABSTRACT TO CONCRETE (IOC CONTAINER WILL HANDLE IT)
//        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
//       // $this->app->bind(DepartmentRepositoryInterface::class, DepartmentRepository::class);
//        $this->app->bind(PermissionRepositoryInterface::class, PermissionRepository::class);
//        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
    }

    public function bootingPackage()
    {
        // Add Your Livewire Components to the Config File
//        foreach (config('usermgt.livewire_components') as $component => $component_class) {
//
//            Livewire::component($component, $component_class);
//
//        }
        Livewire::component('user-list', \Elshaden\LivewireUsermgt\Http\Livewire\UsersList::class);
        Livewire::component('user-create', \Elshaden\LivewireUsermgt\Http\Livewire\UserCreate::class);
    }
}
