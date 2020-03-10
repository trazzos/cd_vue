<?php

namespace Modules\Task\Services;

use Modules\Task\Repositories\Interfaces\TaskRepositoryInterface;
use ThrowException;

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
     * @param $data source to update
     * @param $id register identifier that will be updated
     * @return false|true
     */
    public function update(array $data, $id): ? bool{
        $task = $this->taskRepo->update($data,$id,"id");

        if(!$task) {
            ThrowException::notFound();
        }

        return $task;
    }
}
