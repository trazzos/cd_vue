<?php

namespace Modules\PreProject\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\PreProject\Http\Requests\PreProjectGetValidationRequest;
use Modules\PreProject\Services\PreProjectGetService;

/**
 * Class PreProjectGetController
 * @package Modules\PreProject\Http\Controllers
 */
class PreProjectGetController extends Controller {
    /**
     * @var preprojectGetService
     */
    private $preprojectGetService;

    /**
     * PreProjectGetController constructor.
     * @param PreProjectGetService $preprojectGetService
     */
    public function __construct(PreProjectGetService $preprojectGetService) {
        $this->preprojectGetService = $preprojectGetService;
    }

    /**
     * @param PreProjectGetValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(PreProjectGetValidationRequest $request) : JsonResponse {
        $response = $this->preprojectGetService->list(); //TODO temporary
        return $this->handleAjaxJsonResponse($response);
    }
}
