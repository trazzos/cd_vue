<?php

namespace Modules\Stage\Services;

use Modules\Stage\Models\Stage;
use Modules\Stage\Repositories\Interfaces\StageRepositoryInterface;

/**
 * Class StageService
 * @package Modules\Stage\Services
 */
class StageDeleteService {
    /**
     * @var StageRepositoryInterface
     */
    private $stageRepo;

    /**
     * StageDeleteService constructor.
     * @param StageRepositoryInterface $stageRepo
     */
    public function __construct(StageRepositoryInterface $stageRepo) {
        $this->stageRepo = $stageRepo;
    }

    /**
     * @param array $data
     * @return Stage|null
     */
    public function delete($id) : ?bool {
        return $this->stageRepo->deleteWhere("id","=",$id);
    }
}
