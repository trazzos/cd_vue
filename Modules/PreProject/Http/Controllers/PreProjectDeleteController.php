<?php

namespace Modules\PreProject\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\PreProject\Http\Requests\PreProjectDeleteValidationRequest;
use Modules\PreProject\Services\PreProjectDeleteService;

/**
 * Class PreProjectDeleteController
 * @package Modules\PreProject\Http\Controllers
 */
class PreProjectDeleteController extends Controller {
    /**
     * @var preprojectDeleteService
     */
    private $preprojectDeleteService;

    /**
     * PreProjectDeleteController constructor.
     * @param PreProjectDeleteService $preprojectDeleteService
     */
    public function __construct(PreProjectDeleteService $preprojectDeleteService) {
        $this->preprojectDeleteService = $preprojectDeleteService;
    }

    /**
     * @param PreProjectDeleteValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(PreProjectDeleteValidationRequest $request) : JsonResponse {
        $data = $request->validated();
        $response = $this->preprojectDeleteService->delete($request->get("id"));
        return $this->handleAjaxJsonResponse($response);
    }
}
