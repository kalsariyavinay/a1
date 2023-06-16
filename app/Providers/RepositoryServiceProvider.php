<?php

namespace App\Providers;
use App\Repository\Interfaces\ContactUsRepositoryInterface;
use App\Repository\Interfaces\PrivacyPolicyRepositoryInterface;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\Interfaces\MenuRepositoryInterface;
use App\Repository\Interfaces\BlogRepositoryInterface;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Repository\Interfaces\PortfolioRepositoryInterface;
use App\Repository\Interfaces\CmsPageRepositoryInterface;
use App\Repository\BlogRepository;
use App\Repository\PrivacyPolicyRepository;
use App\Repository\UserRepository;
use App\Repository\MenuRepository;
use App\Repository\CategoryRepository;
use App\Repository\PortfolioRepository;
use App\Repository\CmsPageRepository;
use App\Repository\ContactUsRepository;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind( UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind( MenuRepositoryInterface::class, MenuRepository::class);
        $this->app->bind( BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind( CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind( PortfolioRepositoryInterface::class, PortfolioRepository::class);
        $this->app->bind( CmsPageRepositoryInterface::class, CmsPageRepository::class);
        $this->app->bind( ContactUsRepositoryInterface::class, ContactUsRepository::class);
        $this->app->bind( PrivacyPolicyRepositoryInterface::class, PrivacyPolicyRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
