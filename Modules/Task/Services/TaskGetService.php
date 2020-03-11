<?php

namespace Modules\Task\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Task\Repositories\Interfaces\TaskRepositoryInterface;
use ThrowException;
use Filter;
use Sort;

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
     * @param array $data
     * @return LengthAwarePaginator|null
     */
    public function list(array $data) : ?LengthAwarePaginator {
        if(isset($data['predicates'])) {
            Filter::apply(__NAMESPACE__, $this->taskRepo, $data['predicates']);
        }

        if(isset($data['sorts'])) {
            Sort::apply(__NAMESPACE__, $this->taskRepo, $data['sorts']);
        }
        $tasks = $this->taskRepo->paginate($data['per_page']);
        $tasks->load('task');
        $this->taskRepo->resetRepository();

        if(!$tasks) {
            ThrowException::notFound();
        }

        return $tasks;
    }
}
