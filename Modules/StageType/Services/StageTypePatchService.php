<?php

namespace Modules\StageType\Services;

use Modules\StageType\Models\StageType;
use Modules\StageType\Repositories\Interfaces\StageTypeRepositoryInterface;

/**
 * Class StageTypePatchService
 * @package Modules\StageType\Services
 */
class StageTypePatchService {
    /**
     * @var StageTypeRepositoryInterface
     */
    private $stagetypeRepo;

    /**
     * StageTypePatchService constructor.
     * @param StageTypeRepositoryInterface $stagetypeRepo
     */
    public function __construct(StageTypeRepositoryInterface $stagetypeRepo) {
        $this->stagetypeRepo = $stagetypeRepo;
    }

    /**
     * @param array $data
     * @return StageType|null
     */
    public function update(array $data, $id) : ?bool {
        $stage_type = $this->stagetypeRepo->update($data, $id, "id");

        if(!$stage_type) {
            ThrowException::notFound();
        }
        return $stage_type;
    }
}
