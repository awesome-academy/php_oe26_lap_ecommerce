<?php

namespace App\Providers;

use App\Models\Category;
use App\Repositories\Client\CategoryRepository;
use App\Repositories\Client\CategoryRepositoryInterface;
use App\Repositories\Client\ProductRepository;
use App\Repositories\Client\ProductRepositoryInterface;
use App\Repositories\Client\OrderRepository;
use App\Repositories\Client\OrderRepositoryInterface;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );

        $this->app->singleton(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );

        $this->app->singleton(
            OrderRepositoryInterface::class,
            OrderRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $category = new Category();
        $cat = new CategoryRepository($category);
        $categories = $cat->getSubCategories(config('number.root'));

        View::share('categories', $categories);
    }
}
