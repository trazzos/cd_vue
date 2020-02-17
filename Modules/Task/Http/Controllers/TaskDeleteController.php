<?php

namespace Modules\Task\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\Task\Http\Requests\TaskDeleteValidationRequest;
use Modules\Task\Services\TaskDeleteService;

/**
 * Class TaskDeleteController
 * @package Modules\Task\Http\Controllers
 */
class TaskDeleteController extends Controller {
    private $taskDeleteService;

    /**
     * TaskGetController constructor.
     * @param TaskDeleteService $taskDeleteService
     */
    public function __construct(TaskDeleteService $taskDeleteService) {
        $this->taskDeleteService = $taskDeleteService;
    }

    /**
     * @param TaskDeleteValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(TaskDeleteValidationRequest $request) : JsonResponse {
        $request->validated();
        $response = $this->taskDeleteService->delete($request->get("task_id"));

        return $this->handleAjaxJsonResponse($response);
    }
}
