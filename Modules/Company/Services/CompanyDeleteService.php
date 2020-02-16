<?php

namespace Modules\Company\Services;

use Modules\Company\Repositories\Interfaces\CompanyRepositoryInterface;

/**
 * Class CompanyDeleteService
 * @package Modules\Company\Services
 */
class CompanyDeleteService {
    /**
     * @var CompanyRepositoryInterface
     */
    private $companyRepo;

    /**
     * CompanyDeleteService constructor.
     * @param CompanyRepositoryInterface $companyRepo
     */
    public function __construct(CompanyRepositoryInterface $companyRepo) {
        $this->companyRepo = $companyRepo;
    }

    /**
     * @param $uuid
     * @return false|true
     */
    public function deleteCompany($uuid): ? bool {
        return $this->companyRepo->deleteWhere("uuid","=",$uuid);
    }
}
