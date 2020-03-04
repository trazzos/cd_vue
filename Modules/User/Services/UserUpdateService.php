<?php

namespace Modules\User\Services;

use Modules\User\Models\User;
use Modules\User\Repositories\Interfaces\UserRepositoryInterface;
use Hash;

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
        if(isset($data["password"]) && $data["password"] != ""){
            $data["password"] = Hash::make($data["password"]);
        }else{
            unset($data["password"]);
        }        
        $user = $this->userRepo->updateAndReturn($this->userRepo->findBy("id", $data["id"]), $data);
        return $user;        
    }
}
