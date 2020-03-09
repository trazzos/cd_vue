<?php

namespace Modules\PreProject\Services;

use Modules\PreProject\Models\PreProject;
use Modules\PreProject\Repositories\Interfaces\PreProjectRepositoryInterface;

/**
 * Class PreProjectPatchService
 * @package Modules\PreProject\Services
 */
class PreProjectPatchService {
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
    public function update(array $data, $id) : ?PreProject {
        $preproject = $this->preprojectRepo->updateAndReturn($data,$id);
        return $preproject;
    }
}
