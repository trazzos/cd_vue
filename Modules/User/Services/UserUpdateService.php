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
     * UserUpdateService constructor.
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
        $user = $this->userRepo->updateAndReturn($data, $data["id"]);
        return $user;        
    }
}
