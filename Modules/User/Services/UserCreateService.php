<?php

namespace Modules\User\Services;

use Modules\User\Models\User;
use Modules\User\Repositories\Interfaces\UserRepositoryInterface;

/**
 * Class UserCreateService
 * @package Modules\User\Services
 */
class UserCreateService {
    /**
     * @var UserRepositoryInterface
     */
    private $userRepo;

    /**
     * UserCreateService constructor.
     * @param UserRepositoryInterface $userRepo
     */
    public function __construct(UserRepositoryInterface $userRepo) {
        $this->userRepo = $userRepo;
    }

    /**
     * @param array $data
     * @return User|null
     */
    public function create(array $data) : ?User {
        return $this->userRepo->create($data);
    }
}
