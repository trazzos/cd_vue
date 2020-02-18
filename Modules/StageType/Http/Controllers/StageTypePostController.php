<?php

namespace Modules\StageType\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\StageType\Http\Requests\StageTypePostValidationRequest;
use Modules\StageType\Services\StageTypeCreateService;

/**
 * Class StageTypePostController
 * @package Modules\StageType\Http\Controllers
 */
class StageTypePostController extends Controller {
    /**
    * @var stagetypeCreateService
    */
    private $stagetypeCreateService;

    /**
     * StageTypePostController constructor.
     * @param StageTypeCreateService $stagetypeCreateService
     */
    public function __construct(StageTypeCreateService $stagetypeCreateService) {
        $this->stagetypeCreateService = $stagetypeCreateService;
    }

    /**
     * @param StageTypePostValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(StageTypePostValidationRequest $request) : JsonResponse {
        $data = $request->validated();
        $response = $this->stagetypeCreateService->create($data);
        return $this->handleAjaxJsonResponse($response);
    }
}
