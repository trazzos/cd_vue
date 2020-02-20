<?php

namespace Modules\Company\Services;

use Modules\Company\Models\User;
use Modules\Company\Repositories\Interfaces\CompanyRepositoryInterface;

/**
 * Class CompanyCreateService
 * @package Modules\Company\Services
 */
class CompanyCreateService {
    /**
     * @var CompanyRepositoryInterface
     */
    private $companyRepo;

    /**
     * CompanyGetService constructor.
     * @param CompanyRepositoryInterface $companyRepo
     */
    public function __construct(CompanyRepositoryInterface $companyRepo) {
        $this->companyRepo = $companyRepo;
    }

    /**
     * @param array $data
     * @return User|null
     */
    public function create(array $data) : ?User {
        return $this->companyRepo->create($data);
    }
}
