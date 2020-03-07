<?php

namespace Modules\PreProject\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\PreProject\Http\Requests\PreProjectPostValidationRequest;
use Modules\PreProject\Services\PreProjectCreateService;

/**
 * Class PreProjectPostController
 * @package Modules\PreProject\Http\Controllers
 */
class PreProjectPostController extends Controller {
    /**
     * @var preprojectCreateService
     */
    private $preprojectCreateService;

    /**
     * PreProjectGetController constructor.
     * @param PreProjectCreateService $preprojectCreateService
     */
    public function __construct(PreProjectCreateService $preprojectCreateService) {
        $this->preprojectCreateService = $preprojectCreateService;
    }

    /**
     * @param PreProjectPostValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(PreProjectPostValidationRequest $request) : JsonResponse {
        $data = $request->validated();
        $response = $this->preprojectCreateService->create($data);
        return $this->handleAjaxJsonResponse($response);
    }
}
