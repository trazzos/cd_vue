<?php

namespace Modules\StageType\Services;

use Illuminate\Support\Collection;
use Modules\StageType\Models\StageType;
use Modules\StageType\Repositories\Interfaces\StageTypeRepositoryInterface;
use ThrowException;

/**
 * Class StageTypeGetService
 * @package Modules\StageType\Services
 */
class StageTypeGetService {
    /**
     * @var StageTypeRepositoryInterface
     */
    private $stagetypeRepo;

    /**
     * StageTypeGetService constructor.
     * @param StageTypeRepositoryInterface $stagetypeRepo
     */
    public function __construct(StageTypeRepositoryInterface $stagetypeRepo) {
        $this->stagetypeRepo = $stagetypeRepo;
    }

    /**
     * @param $id
     * @return StageType|null
    * At this point everything is validated, we shouldn't check anything else
     */
    public function info($id) : ?StageType {
        $stage_type = $this->stagetypeRepo->findBy('id', $id);

        if(!$stage_type) {
            ThrowException::notFound();
        }

        return $stage_type;
    }

    /**
     * @return StageType|null
     * At this point everything is validated, we shouldn't check anything else
     * TODO this is just a test  function to show backend and frontend connection
     */
    public function list() : ?Collection {
        $stage_types= $this->stagetypeRepo->all();

        return $stage_types;
    }
}
