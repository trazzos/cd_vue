<?php

namespace Modules\Stage\Services;

use Modules\Stage\Repositories\Interfaces\StageRepositoryInterface;
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
     * @param $data source to update
     * @param $id register identifier that will be updated
     * @return false|true
     */
    public function update(array $data, $id): ? bool{
        $stage = $this->stageRepo->update($data,$id,"id");

        if(!$stage) {
            ThrowException::notFound();
        }

        return $stage;
    }
}
