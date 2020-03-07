<?php
namespace Modules\PreProject\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\PreProject\Repositories\Interfaces;
use Modules\PreProject\Repositories\Implementation;

/**
 * Class RepositoryServiceProvider
 * @package Modules\Lti\Providers
 */
class RepositoryServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(Interfaces\PreProjectRepositoryInterface::class, Implementation\PreProjectRepository::class);
    }
}
