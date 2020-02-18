<?php

namespace Modules\StageType\Services;

use Modules\StageType\Models\StageType;
use Modules\StageType\Repositories\Interfaces\StageTypeRepositoryInterface;

/**
 * Class StageTypeService
 * @package Modules\StageType\Services
 */
class StageTypeDeleteService {
    /**
     * @var StageTypeRepositoryInterface
     */
    private $stagetypeRepo;

    /**
     * StageTypeDeleteService constructor.
     * @param StageTypeRepositoryInterface $stagetypeRepo
     */
    public function __construct(StageTypeRepositoryInterface $stagetypeRepo) {
        $this->stagetypeRepo = $stagetypeRepo;
    }

    /**
     * @param array $data
     * @return StageType|null
     */
    public function delete($id) : ?bool {
        return $this->stagetypeRepo->deleteWhere("id","=",$id);
    }
}
