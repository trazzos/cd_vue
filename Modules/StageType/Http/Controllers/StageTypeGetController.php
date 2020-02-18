<?php

namespace Modules\StageType\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\StageType\Http\Requests\StageTypeGetValidationRequest;
use Modules\StageType\Services\StageTypeGetService;

/**
 * Class StageTypeGetController
 * @package Modules\StageType\Http\Controllers
 */
class StageTypeGetController extends Controller {
    /**
    * @var stagetypeGetService
    */    
    private $stagetypeGetService;

    /**
     * StageTypeGetController constructor.
     * @param StageTypeGetService $stagetypeGetService
     */
    public function __construct(StageTypeGetService $stagetypeGetService) {
        $this->stagetypeGetService = $stagetypeGetService;
    }

    /**
     * @param StageTypeGetValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(StageTypeGetValidationRequest $request) : JsonResponse {
        $id = $request->get('id');
        $response = $this->stagetypeGetService->list(); //TODO temporary
        return $this->handleAjaxJsonResponse($response);
    }
}
