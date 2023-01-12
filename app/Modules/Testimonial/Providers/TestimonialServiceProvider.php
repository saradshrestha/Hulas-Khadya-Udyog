<?php

namespace Testimonial\Providers;

use Testimonial\Repositories\TestimonialInterface;
use Testimonial\Repositories\TestimonialRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class TestimonialServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    $this->app->bind(TestimonialInterface::class, TestimonialRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName = "Testimonial";
        $ds = DIRECTORY_SEPARATOR;
        config([
            'testimonialroute' => File::getRequire(loadConfig('route.php', $moduleName)),
        ]);
        $this->loadRoutesFrom(loadRoutes('admin.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('web.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('api.php', $moduleName));
        $this->loadMigrationsFrom(loadMigrations($moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);
    }
}
