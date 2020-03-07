<?php

namespace Modules\PreProject\Repositories\Implementation;
use App\Repositories\Implementation\BaseRepository;
use Modules\PreProject\Models\PreProject;
use Modules\PreProject\Repositories\Interfaces\PreProjectRepositoryInterface;


/**
 * Class PreProjectRepository
 * @package Modules\PreProject\Repositories\Implementation
 */
class PreProjectRepository extends BaseRepository implements PreProjectRepositoryInterface {
    /**
     * @return string
     */
    public function model() : string {
        return PreProject::class;
    }
}