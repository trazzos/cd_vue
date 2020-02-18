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
     * TaskPatchService constructor.
     * @param TaskRepositoryInterface $taskRepo
     */
    public function __construct(TaskRepositoryInterface $taskRepo) {
        $this->taskRepo = $taskRepo;
    }

    /**
     * @param array $data
     * @return Task|null
     */
    public function update(array $data, $id) : ?bool {
        $task = $this->taskRepo->update($data, $id, "id");

        if(!$task) {
            ThrowException::notFound();
        }
        return $task;
    }
}
