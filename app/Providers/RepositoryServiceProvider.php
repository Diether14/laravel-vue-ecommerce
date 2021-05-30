<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ProductInterface;
use App\Repositories\ProductRepository;
use App\Interfaces\CategoryInterface;
use App\Repositories\CategoryRepository;
use App\Interfaces\PartnerInterface;
use App\Repositories\PartnerRepository;
use App\Interfaces\NewsletterInterface;
use App\Repositories\NewsletterRepository;
use App\Interfaces\UserInterface;
use App\Repositories\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind(
            ProductInterface::class,
            ProductRepository::class
        );
        $this->app->bind(
            CategoryInterface::class,
            CategoryRepository::class
        );
        $this->app->bind(
           PartnerInterface::class,
           PartnerRepository::class
        );
        $this->app->bind(
            NewsletterInterface::class,
            NewsletterRepository::class
         );
        $this->app->bind(
        UserInterface::class,
        UserRepository::class
        );
    }

}
