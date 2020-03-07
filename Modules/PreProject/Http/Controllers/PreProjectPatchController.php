<?php

namespace Modules\PreProject\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\PreProject\Http\Requests\PreProjectPatchValidationRequest;
use Modules\PreProject\Services\PreProjectPatchService;

/**
 * Class PreProjectPatchController
 * @package Modules\PreProject\Http\Controllers
 */
class PreProjectPatchController extends Controller {
    /**
     * @var preprojectPatchService
     */
    private $preprojectPatchService;

    /**
     * PreProjectPatchController constructor.
     * @param PreProjectPatchService $preprojectPatchService
     */
    public function __construct(PreProjectPatchService $preprojectPatchService) {
        $this->preprojectPatchService = $preprojectPatchService;
    }

    /**
     * @param PreProjectPatchValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(PreProjectPatchValidationRequest $request) : JsonResponse {
        $response = $this->preprojectPatchService->update($request->validated(),$request->get("id"));
        return $this->handleAjaxJsonResponse($response);
    }
}
