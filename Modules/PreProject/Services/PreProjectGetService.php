<?php

namespace Modules\PreProject\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use Modules\PreProject\Models\PreProject;
use Modules\PreProject\Repositories\Interfaces\PreProjectRepositoryInterface;
use ThrowException;
use Filter;
use Sort;

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
     * @param array $data
     * @return LengthAwarePaginator|null
     */
    public function list(array $data) : ?LengthAwarePaginator {
        if(isset($data['predicates'])) {
            Filter::apply(__NAMESPACE__, $this->preprojectRepo, $data['predicates']);
        }

        if(isset($data['sorts'])) {
            Sort::apply(__NAMESPACE__, $this->preprojectRepo, $data['sorts']);
        }

        $preprojects = $this->preprojectRepo->paginate($data['per_page']);
        $this->preprojectRepo->resetRepository();

        if(!$preprojects) {
            ThrowException::notFound();
        }

        return $preprojects;
    }
}
