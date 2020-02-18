<?php

namespace Modules\Stage\Services;

use Modules\Stage\Models\Stage;
use Modules\Stage\Repositories\Interfaces\StageRepositoryInterface;

/**
 * Class StagePatchService
 * @package Modules\Stage\Services
 */
class StagePatchService {
    /**
     * @var StageRepositoryInterface
     */
    private $stageRepo;

    /**
     * StagePatchService constructor.
     * @param StageRepositoryInterface $stageRepo
     */
    public function __construct(StageRepositoryInterface $stageRepo) {
        $this->stageRepo = $stageRepo;
    }

    /**
     * @param array $data
     * @return Stage|null
     */
    public function update(array $data, $id) : ?bool {
        $stage = $this->stageRepo->update($data, $id, "id");

        if(!$stage) {
            ThrowException::notFound();
        }
        return $stage;
    }
}
