<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\GeneralInfo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $general_info = GeneralInfo::first();
            $categories = Category::where('status', 1)->get();
            $view->with([
                'general_info'=> $general_info,
                'categories' => $categories
            ]);
        });
    }
}
