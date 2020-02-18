<?php

namespace Modules\Stage\Services;

use Illuminate\Support\Collection;
use Modules\Stage\Models\Stage;
use Modules\Stage\Repositories\Interfaces\StageRepositoryInterface;
use ThrowException;

/**
 * Class StageGetService
 * @package Modules\Stage\Services
 */
class StageGetService {
    /**
     * @var StageRepositoryInterface
     */
    private $stageRepo;

    /**
     * StageGetService constructor.
     * @param StageRepositoryInterface $stageRepo
     */
    public function __construct(StageRepositoryInterface $stageRepo) {
        $this->stageRepo = $stageRepo;
    }

    /**
     * @param $id
     * @return Stage|null
    * At this point everything is validated, we shouldn't check anything else
     */
    public function info($id) : ?Stage {
        $stage = $this->stageRepo->findBy('id', $id);

        if(!$stage) {
            ThrowException::notFound();
        }

        return $stage;
    }

    /**
     * @param $id
     * @return Stage|null
     * At this point everything is validated, we shouldn't check anything else
     * TODO this is just a test  function to show backend and frontend connection
     */
    public function list() : ?Collection {
        $stages= $this->stageRepo->all();
        return $stages;
    }
}
