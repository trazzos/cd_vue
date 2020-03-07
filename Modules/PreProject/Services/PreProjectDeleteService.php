<?php

namespace Modules\PreProject\Services;

use Modules\PreProject\Models\PreProject;
use Modules\PreProject\Repositories\Interfaces\PreProjectRepositoryInterface;

/**
 * Class PreProjectDeleteService
 * @package Modules\PreProject\Services
 */
class PreProjectDeleteService {
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
    public function delete($id) : ?bool {
        return $this->preprojectRepo->delete($id);
    }
}
