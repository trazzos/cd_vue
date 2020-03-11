<?php

namespace Modules\Stage\Services;

use Modules\Stage\Repositories\Interfaces\StageRepositoryInterface;
use Modules\Stage\Models\Stage;
use Modules\User\Models\User;
use ThrowException;

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
     * @param User $user
     * @param array $data
     * @return Stage|null
     */
    public function update(User $user, array $data) : ?Stage {
        $data = $this->normalizeData($user, $data);
        return $this->stageRepo->updateAndReturn($data, $data["id"]);
    }

    /**
     * @param User $user
     * @param array $data
     * @return array
     */
    private function normalizeData(User $user, array $data) {
        return $data;
    }
}
