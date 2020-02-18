<?php

namespace Modules\Stage\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\Stage\Http\Requests\StageDeleteValidationRequest;
use Modules\Stage\Services\StageDeleteService;

/**
 * Class StageDeleteController
 * @package Modules\Stage\Http\Controllers
 */
class StageDeleteController extends Controller {
    /**
    * @var stageDeleteService
    */
    private $stageDeleteService;

    /**
     * StageDeleteController constructor.
     * @param StageDeleteService $stageDeleteService
     */
    public function __construct(StageDeleteService $stageDeleteService) {
        $this->stageDeleteService = $stageDeleteService;
    }

    /**
     * @param StageDeleteValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(StageDeleteValidationRequest $request) : JsonResponse {
        $request->validated();
        $response = $this->stageDeleteService->delete($request->get("id"));

        return $this->handleAjaxJsonResponse($response);
    }
}
