<?php

namespace Modules\PreProject\Services;

use Illuminate\Support\Collection;
use Modules\PreProject\Models\PreProject;
use Modules\PreProject\Repositories\Interfaces\PreProjectRepositoryInterface;
use ThrowException;

/**
 * Class PreProjectGetService
 * @package Modules\PreProject\Services
 */
class PreProjectGetService {
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
     * @param $id
     * @return PreProject|null
    * At this point everything is validated, we shouldn't check anything else
     */
    public function info($id) : ?PreProject {
        $preproject = $this->preprojectRepo->findBy('id', $id);

        if(!$preproject) {
            ThrowException::notFound();
        }

        return $preproject;
    }

    /**
     * @param $id
     * @return PreProject|null
     * At this point everything is validated, we shouldn't check anything else
     * TODO this is just a test  function to show backend and frontend connection
     */
    public function list() : ?Collection {
        $preprojects= $this->preprojectRepo->all();
        return $preprojects;
    }
}
