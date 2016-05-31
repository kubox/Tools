<?php

namespace App\Providers;

use App\Policies\AccountPolicy;
use App\DataAccess\Eloquent\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * 認可ロジック App\Policies\AccountPolicy
     */

    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        User::class => AccountPolicy::class,
    ];

    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }

}