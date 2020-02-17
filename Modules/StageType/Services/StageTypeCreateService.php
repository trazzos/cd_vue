<?php

namespace Modules\StageType\Services;

use Modules\StageType\Models\StageType;
use Modules\StageType\Repositories\Interfaces\StageTypeRepositoryInterface;

/**
 * Class StageTypeCreateService
 * @package Modules\StageType\Services
 */
class StageTypeCreateService {
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
    public function create(array $data) : ?StageType {
        return $this->stagetypeRepo->create($data);
    }
}
