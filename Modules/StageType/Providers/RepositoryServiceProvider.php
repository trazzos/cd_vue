<?php
namespace Modules\StageType\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\StageType\Repositories\Interfaces;
use Modules\StageType\Repositories\Implementation;

/**
 * Class RepositoryServiceProvider
 * @package Modules\StageType\Providers
 */
class RepositoryServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(Interfaces\StageTypeRepositoryInterface::class, Implementation\StageTypeRepository::class);
    }
}
