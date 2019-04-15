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
        Gate::resource('events', 'App\Policies\EventsPolicy');
        Gate::resource('workshops', 'App\Policies\WorkshopsPolicy');
        Gate::resource('contact', 'App\Policies\ContactPolicy');
        Gate::define('participants19.view', 'App\Policies\ParticipantsPolicy@view');
        Gate::define('memberssecond.view', 'App\Policies\MembersPolicy@view');
        Gate::define('Opening19.view', 'App\Policies\OpeningPolicy@view');
        Gate::define('Opening19.mail', 'App\Policies\OpeningPolicy@mail');
        Gate::define('career6.view', 'App\Policies\Career6Policy@view');
        Gate::define('career6.session', 'App\Policies\Career6Policy@session');
        Gate::define('highway.view', 'App\Policies\Highway19Policy@view');
    }
}
