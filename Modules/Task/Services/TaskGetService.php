<?php

namespace Modules\Task\Services;

use Illuminate\Support\Collection;
use Modules\Task\Models\Task;
use Modules\Task\Repositories\Interfaces\TaskRepositoryInterface;
use ThrowException;

/**
 * Class TaskGetService
 * @package Modules\Task\Services
 */
class TaskGetService {
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
     * @param $id
     * @return Task|null
    * At this point everything is validated, we shouldn't check anything else
     */
    public function info($id) : ?Task {
        $task = $this->taskRepo->findBy('task_id', $id);

        if(!$task) {
            ThrowException::notFound();
        }

        return $task;
    }

    /**
     * @param $id
     * @return Task|null
     * At this point everything is validated, we shouldn't check anything else
     * TODO this is just a test  function to show backend and frontend connection
     */
    public function list() : ?Collection {
        $tasks= $this->taskRepo->all();

        /*if(!$task_s) {
            ThrowException::notFound();
        }*/

        return $tasks;
    }
}
