<?php

namespace App\Providers;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Dashboard $dashboard)
    {
        $permissions = ItemPermission::group('modules')
            ->addPermission('telescope', 'Access to the telesopce dashboard.');

        $dashboard->registerPermissions($permissions);
    }
}
