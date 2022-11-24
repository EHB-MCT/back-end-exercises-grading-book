<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('student', function (User $user) {
            return $user->role === User::ROLE_STUDENT;
        });

        Gate::define('admin', function (User $user) {
            return $user->role === User::ROLE_ADMIN;
        });

        Gate::define('viewGrade', function (User $user, User $owner) {
            return $user->id === $owner->id;
        });
    }
}
