<?php

namespace Modules\StageType\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\StageType\Http\Requests\StageTypeDeleteValidationRequest;
use Modules\StageType\Services\StageTypeDeleteService;

/**
 * Class StageTypeDeleteController
 * @package Modules\StageType\Http\Controllers
 */
class StageTypeDeleteController extends Controller {
    /**
    * @var stagetypeDeleteService
    */     
    private $stagetypeDeleteService;

    /**
     * StageTypeDeleteController constructor.
     * @param StageTypeDeleteService $stagetypeDeleteService
     */
    public function __construct(StageTypeDeleteService $stagetypeDeleteService) {
        $this->stagetypeDeleteService = $stagetypeDeleteService;
    }

    /**
     * @param StageTypeDeleteValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(StageTypeDeleteValidationRequest $request) : JsonResponse {
        $request->validated();
        $response = $this->stagetypeDeleteService->delete($request->get("id"));

        return $this->handleAjaxJsonResponse($response);
    }
}
