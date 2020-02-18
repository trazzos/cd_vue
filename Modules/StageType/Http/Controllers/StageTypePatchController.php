<?php

namespace Modules\StageType\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\StageType\Http\Requests\StageTypePatchValidationRequest;
use Modules\StageType\Services\StageTypePatchService;

/**
 * Class StageTypePatchController
 * @package Modules\StageType\Http\Controllers
 */
class StageTypePatchController extends Controller {
    /**
    * @var stagetypePatchService
    */
    private $stagetypePatchService;

    /**
     * StageTypePatchController constructor.
     * @param StageTypePatchService $stagetypePatchService
     */
    public function __construct(StageTypePatchService $stagetypePatchService) {
        $this->stagetypePatchService = $stagetypePatchService;
    }

    /**
     * @param StageTypePatchValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(StageTypePatchValidationRequest $request) : JsonResponse {
        $response = $this->stagetypePatchService->update($request->validated(), $request->get("id"));
        return $this->handleAjaxJsonResponse($response);
    }
}
