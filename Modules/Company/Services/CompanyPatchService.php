<?php

namespace Modules\Company\Services;

use Modules\Company\Repositories\Interfaces\CompanyRepositoryInterface;

/**
 * Class CompanyPatchService
 * @package Modules\Company\Services
 */
class CompanyPatchService {
    /**
     * @var CompanyRepositoryInterface
     */
    private $companyRepo;

    /**
     * CompanyPatchService constructor.
     * @param CompanyRepositoryInterface $companyRepo
     */
    public function __construct(CompanyRepositoryInterface $companyRepo) {
        $this->companyRepo = $companyRepo;
    }

    /**
     * @param $data information to update
     * @param $uuid register identifier that will be updated
     * @return false|true
     */
    public function updateCompany($data,$uuid): ? bool{
        $company = $this->companyRepo->update($data,$uuid,"uuid");

        if(!$company) {
            ThrowException::notFound();
        }

        return $company;
    }
}
