<?php

namespace App\Providers;

use App\Policies\DataPolicy;
use App\Policies\InventoryPolicy;
use App\Policies\ReportPolicy;
use App\Policies\SettingPolicy;
use App\Policies\ShipmentPolicy;
use App\Policies\TrashPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('read-users', [UserPolicy::class, 'read']);
        Gate::define('write-users', [UserPolicy::class, 'write']);

        Gate::define('read-data', [DataPolicy::class, 'read']);
        Gate::define('write-data', [DataPolicy::class, 'write']);

        Gate::define('read-shipments', [ShipmentPolicy::class, 'read']);
        Gate::define('write-shipments', [ShipmentPolicy::class, 'write']);

        Gate::define('read-inventory', [InventoryPolicy::class, 'read']);

        Gate::define('read-reports', [ReportPolicy::class, 'read']);

        Gate::define('read-trash', [TrashPolicy::class, 'read']);
        Gate::define('write-trash', [TrashPolicy::class, 'write']);

        Gate::define('read-settings', [SettingPolicy::class, 'read']);
        Gate::define('write-settings', [SettingPolicy::class, 'write']);
    }
}
