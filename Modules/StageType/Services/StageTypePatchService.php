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
     * StageTypeGetService constructor.
     * @param StageTypeRepositoryInterface $stagetypeRepo
     */
    public function __construct(StageTypeRepositoryInterface $stagetypeRepo) {
        $this->stagetypeRepo = $stagetypeRepo;
    }

    /**
     * @param array $data
     * @return StageType|null
     */
    public function update(array $data, $stage_type_id) : ?bool {
        $stage_type = $this->stagetypeRepo->update($data, $stage_type_id, "stage_type_id");

        if(!$stage_type) {
            ThrowException::notFound();
        }
        return $stage_type;
    }
}
