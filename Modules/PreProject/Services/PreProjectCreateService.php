<?php

namespace Modules\PreProject\Services;

use Modules\PreProject\Models\PreProject;
use Modules\PreProject\Repositories\Interfaces\PreProjectRepositoryInterface;

/**
 * Class PreProjectCreateService
 * @package Modules\PreProject\Services
 */
class PreProjectCreateService {
    /**
     * @var PreProjectRepositoryInterface
     */
    private $preprojectRepo;

    /**
     * PreProjectGetService constructor.
     * @param PreProjectRepositoryInterface $preprojectRepo
     */
    public function __construct(PreProjectRepositoryInterface $preprojectRepo) {
        $this->preprojectRepo = $preprojectRepo;
    }

    /**
     * @param array $data
     * @return PreProject|null
     */
    public function create(array $data) : ?PreProject {
        return $this->preprojectRepo->create($data);
    }
}
