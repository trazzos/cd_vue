<?php

namespace Modules\Task\Services;

use Modules\Task\Models\Task;
use Modules\Task\Repositories\Interfaces\TaskRepositoryInterface;

/**
 * Class TaskService
 * @package Modules\Task\Services
 */
class TaskDeleteService {
    /**
     * @var TaskRepositoryInterface
     */
    private $taskRepo;

    /**
     * TaskGetService constructor.
     * @param TaskRepositoryInterface $taskRepo
     */
    public function __construct(TaskRepositoryInterface $taskRepo) {
        $this->taskRepo = $taskRepo;
    }

    /**
     * @param array $data
     * @return Task|null
     */
    public function delete($task_id) : ?bool {
        return $this->taskRepo->deleteWhere("task_id","=",$task_id);
    }
}
