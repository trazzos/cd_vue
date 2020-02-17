<?php

namespace Modules\Task\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\Task\Http\Requests\TaskPatchValidationRequest;
use Modules\Task\Services\TaskPatchService;

/**
 * Class TaskPatchController
 * @package Modules\Task\Http\Controllers
 */
class TaskPatchController extends Controller {
    private $taskPatchService;

    /**
     * TaskGetController constructor.
     * @param TaskPatchService $taskPatchService
     */
    public function __construct(TaskPatchService $taskPatchService) {
        $this->taskPatchService = $taskPatchService;
    }

    /**
     * @param TaskPatchValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(TaskPatchValidationRequest $request) : JsonResponse {
        $response = $this->taskPatchService->update($request->validated(), $request->get("task_id"));
        return $this->handleAjaxJsonResponse($response);
    }
}
