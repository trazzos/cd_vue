<?php

namespace Modules\Task\Services;

use Modules\Task\Models\Task;
use Modules\Task\Repositories\Interfaces\TaskRepositoryInterface;

/**
 * Class TaskPatchService
 * @package Modules\Task\Services
 */
class TaskPatchService {
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
    public function update(array $data, $task_id) : ?bool {
        $task = $this->taskRepo->update($data, $task_id, "task_id");

        if(!$task) {
            ThrowException::notFound();
        }
        return $task;
    }
}
