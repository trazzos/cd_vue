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
     * @param $id
     * @return User|null
    * At this point everything is validated, we shouldn't check anything else
     */
    public function info($id) : ?User {
        $user = $this->userRepo->findBy('id', $id);
        if(!$user) {
            ThrowException::notFound();
        }

        return $user;
    }

    /**
     * @param $id
     * @return User|null
     * At this point everything is validated, we shouldn't check anything else
     * TODO this is just a test  function to show backend and frontend connection
     */
    public function list() : ?Collection {
        $companies= $this->userRepo->all();

        /*if(!$user) {
            ThrowException::notFound();
        }*/

        return $companies;
    }
}
