<?php

namespace App\Providers;

use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\SliderRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\SliderRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register(){


        $this->app->bind(ProductRepositoryInterface::class,ProductRepository::class);
        $this->app->bind(SliderRepositoryInterface::class,SliderRepository::class);
    }



}
