<?php
namespace Modules\StageType\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface;

/**
 * Interface StageTypeRepositoryInterface
 * @package Modules\StageType\Repositories\Interfaces
 */
interface StageTypeRepositoryInterface extends RepositoryInterface {
    /**
     * @return mixed
     */
    public function model();
}