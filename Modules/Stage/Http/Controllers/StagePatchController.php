<?php

namespace Modules\Stage\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\Stage\Http\Requests\StagePatchValidationRequest;
use Modules\Stage\Services\StagePatchService;

/**
 * Class StagePatchController
 * @package Modules\Stage\Http\Controllers
 */
class StagePatchController extends Controller
{
    /**
     * @var StagePatchService $stagePatchService
     */
    private $stagePatchService;

    /**
     * StagePatchController constructor
     * @param StagePatchService $stagePatchService
     */
    public function __construct(StagePatchService $stagePatchService){
        $this->stagePatchService = $stagePatchService;
    }

    /**
     * @param StagePatchValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(StagePatchValidationRequest $request) : JsonResponse {
        $response = $this->stagePatchService->update($request->validated(), $request->get("id"));

        return $this->handleAjaxJsonResponse($response);
    }
}
