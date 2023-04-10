<?php

namespace App\Providers;

use App\Repository\Interfaces\Test as TestContract;
use App\Repository\V1\Test;

use App\Repository\Interfaces\Module as ModuleContract;
use App\Repository\V1\Module;

use App\Repository\Interfaces\ModuleSite as ModuleSiteContract;
use App\Repository\V1\ModuleSite;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(TestContract::class, function ($app) {
            return new Test();
        });   
        
        $this->app->bind(ModuleContract::class, function ($app) {
            return new Module();
        }); 

        $this->app->bind(ModuleSiteContract::class, function ($app) {
            return new ModuleSite();
        }); 
    }


    public function boot()
    {
        //
    }
}
