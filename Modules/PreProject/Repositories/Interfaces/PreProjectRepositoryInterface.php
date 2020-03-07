<?php
namespace Modules\PreProject\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface;

/**
 * Interface PreProjectRepositoryInterface
 * @package Modules\PreProject\Repositories\Interfaces
 */
interface PreProjectRepositoryInterface extends RepositoryInterface {
    /**
     * @return mixed
     */
    public function model();
}