<?php

namespace Modules\Stage\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\Stage\Http\Requests\StagePostValidationRequest;
use Modules\Stage\Services\StageCreateService;

/**
 * Class StagePostController
 * @package Modules\Stage\Http\Controllers
 */
class StagePostController extends Controller {
    private $stageCreateService;

    /**
     * StageGetController constructor.
     * @param StageCreateService $stageCreateService
     */
    public function __construct(StageCreateService $stageCreateService) {
        $this->stageCreateService = $stageCreateService;
    }

    /**
     * @param StagePostValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(StagePostValidationRequest $request) : JsonResponse {
        $data = $request->validated();
        $response = $this->stageCreateService->create($data);
        return $this->handleAjaxJsonResponse($response);
    }
}