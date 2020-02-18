<?php

namespace Modules\Task\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\Task\Http\Requests\TaskPostValidationRequest;
use Modules\Task\Services\TaskCreateService;

/**
 * Class TaskPostController
 * @package Modules\Task\Http\Controllers
 */
class TaskPostController extends Controller {
    /**
    * @var taskCreateService
    */
    private $taskCreateService;

    /**
     * TaskPostController constructor.
     * @param TaskCreateService $taskCreateService
     */
    public function __construct(TaskCreateService $taskCreateService) {
        $this->taskCreateService = $taskCreateService;
    }

    /**
     * @param TaskPostValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(TaskPostValidationRequest $request) : JsonResponse {
        $data = $request->validated();
        $response = $this->taskCreateService->create($data);
        return $this->handleAjaxJsonResponse($response);
    }
}
