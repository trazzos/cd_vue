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
    private $stagetypePatchService;

    /**
     * StageTypeGetController constructor.
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
        //$data = $request->validated();    
        //$response = $this->stagetypePatchService->update($data, $stage_type_id);
        $response = $this->stagetypePatchService->update($request->validated(), $request->get("stage_type_id"));
        return $this->handleAjaxJsonResponse($response);
    }
}
