<?php

namespace Modules\Company\Services;

use Illuminate\Support\Collection;
use Modules\Company\Models\Company;
use Modules\Company\Repositories\Interfaces\CompanyRepositoryInterface;
use ThrowException;

/**
 * Class CompanyGetService
 * @package Modules\Company\Services
 */
class CompanyGetService {
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
     * @param $id
     * @return User|null
    * At this point everything is validated, we shouldn't check anything else
     */
    public function info($id) : ?Company {
        $company = $this->companyRepo->findBy('uuid', $id); //un quesy SELECT * FROM company WHERE uuid = 1
        $company->load('user'); //n + 1 queries
        //$company->user; //SELECT * FROM users JOIN company

        if(!$company) {
            ThrowException::notFound();
        }

        return $company;
    }

    /**
     * @param $id
     * @return User|null
     * At this point everything is validated, we shouldn't check anything else
     * TODO this is just a test  function to show backend and frontend connection
     */
    public function list() : ?Collection {
        $companies= $this->companyRepo->all(); //1 query
        $companies->load('user'); //1 query SELECT * FROM user WHERE IN (1, 2, 3)

        /*$phase= $this->companyRepo->all(); //1 query
        $phase->load('task.actions');*/
        /*$companies->each(function($company) {
            $company->user; //1 query = 3 queries
        });*/

        /*if(!$company) {
            ThrowException::notFound();
        }*/

        return $companies;
    }
}
