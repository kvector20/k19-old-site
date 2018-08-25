<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('admins', 'App\Policies\AdminsPolicy');
        Gate::resource('roles', 'App\Policies\RolesPolicy');
        Gate::resource('permissions', 'App\Policies\PermissionsPolicy');
        Gate::resource('headlines', 'App\Policies\HeadlinesPolicy');
        Gate::resource('topics', 'App\Policies\TopicsPolicy');
        Gate::define('topics.publish', 'App\Policies\TopicsPolicy@publish');
    }
}
