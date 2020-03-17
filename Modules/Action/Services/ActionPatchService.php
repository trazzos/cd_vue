<?php

namespace Modules\Action\Services;

use Modules\User\Models\User;
use Modules\Action\Repositories\Interfaces\ActionRepositoryInterface;

/**
 * Class ActionPatchService
 * @package Modules\Action\Services
 */
class ActionPatchService {
    /**
     * @var ActionRepositoryInterface
     */
    private $actionRepo;

    /**
     * ActionUpdateService constructor.
     * @param ActionRepositoryInterface $actionRepo
     */
    public function __construct(ActionRepositoryInterface $actionRepo) {
        $this->actionRepo = $actionRepo;
    }

    /**
     * @param User $user
     * @param array $data
     * @return Action|null
     */
    public function update(User $user, array $data) : ?Action {
        $data = $this->normalizeData($user, $data);

        return $this->actionRepo->updateAndReturn($data, $data["id"]);
    }

    /**
     * @param Action $action
     * @param array $data
     * @return array
     */
    private function normalizeData(User $user, array $data) {
        $data['user_id'] = $user['id'];
        return $data;
    }
}
