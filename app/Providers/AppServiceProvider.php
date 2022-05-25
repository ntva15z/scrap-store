<?php

namespace App\Providers;

use App\Models\Products;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $productShare = Products::where('deleted_at', '=', null)->get();

        View::share(['productShare' => $productShare]);
    }
}
