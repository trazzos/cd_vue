<?php

namespace Modules\User\Services;

use Modules\User\Models\User;
use Modules\User\Repositories\Interfaces\UserRepositoryInterface;

/**
 * Class UserUpdateService
 * @package Modules\User\Services
 */
class UserUpdateService {
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
     */
    public function update(array $data) : ?User {
        $this->userRepo->update($data, $data["id"]);
        $user = $this->userRepo->findBy('id', $data["id"]);
        return $user;        
    }
}
