<?php

namespace Modules\User\Services;

use Illuminate\Support\Collection;
use Modules\User\Models\User;
use Modules\User\Repositories\Interfaces\UserRepositoryInterface;
use ThrowException;

/**
 * Class UserGetService
 * @package Modules\User\Services
 */
class UserGetService {
    /**
     * @var UserRepositoryInterface
     */
    private $userRepo;

    /**
     * UserGetService constructor.
     * @param UserRepositoryInterface $userRepo
     */
    public function __construct(UserRepositoryInterface $userRepo) {
        $this->userRepo = $userRepo;
    }

    /**
     * @param array $data
     * @return User|null
     * At this point everything is validated, we shouldn't check anything else
     * TODO this is just a test  function to show backend and frontend connection
     */
    public function list($data) : ?Collection {
        $users = $this->userRepo->whereIn("id",$data); //$ids es un arreglo de ids $ids = [1, 2, 3, 4]
        
        if(!$user) {
            ThrowException::notFound();
        }
        

        return $users;
    }
}
