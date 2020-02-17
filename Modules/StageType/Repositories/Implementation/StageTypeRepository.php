<?php

namespace Modules\StageType\Repositories\Implementation;
use App\Repositories\Implementation\BaseRepository;
use Modules\StageType\Models\StageType;
use Modules\StageType\Repositories\Interfaces\StageTypeRepositoryInterface;


/**
 * Class StageTypeRepository
 * @package Modules\StageType\Repositories\Implementation
 */
class StageTypeRepository extends BaseRepository implements StageTypeRepositoryInterface {
    /**
     * @return string
     */
    public function model() : string {
        return StageType::class;
    }
}