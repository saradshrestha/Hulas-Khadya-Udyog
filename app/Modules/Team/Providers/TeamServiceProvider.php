<?php

namespace Team\Providers;

use Team\Repositories\TeamInterface;
use Team\Repositories\TeamRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class TeamServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    $this->app->bind(TeamInterface::class, TeamRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName = "Team";
        $ds = DIRECTORY_SEPARATOR;
        config([
            'teamroute' => File::getRequire(loadConfig('route.php', $moduleName)),
        ]);
        $this->loadRoutesFrom(loadRoutes('admin.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('web.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('api.php', $moduleName));
        $this->loadMigrationsFrom(loadMigrations($moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);
    }
}
