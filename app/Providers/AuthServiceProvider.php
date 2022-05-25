<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Define scope for API
        Passport::tokensCan([
            // admin scope
            'scope-admin' => 'administrator',

            // company admin scope
            'scope-staff' => 'staff',

            // company user
            'scope-user' => 'normal user',

        ]);

        // Define default scope
        Passport::setDefaultScope([
            'scope-user',
        ]);

        Passport::routes();

        // Customize revoke oauth token
        Route::delete('oauth/tokens/{token_id}', [
//            'uses' => '\App\Http\Controllers\Api\v1\OAuth\ApiTokenController@revokeToken',
            'as' => 'passport.tokens.destroy',
            'middleware' => 'auth:api'
        ]);
        //
    }
}
