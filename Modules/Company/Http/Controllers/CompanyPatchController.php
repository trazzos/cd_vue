<?php

namespace Modules\Company\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\Company\Http\Requests\CompanyPatchValidationRequest;
use Modules\Company\Services\CompanyPatchService;

/**
 * Class CompanyPostController
 * @package Modules\Company\Http\Controllers
 */
class CompanyPatchController extends Controller {
    private $companyPatchService;

    /**
     * CompanyPatchController constructor.
     * @param CompanyPatchService $companyPatchService
     */
    public function __construct(CompanyPatchService $companyPatchService) {
        $this->companyPatchService = $companyPatchService;
    }

    /**
     * @param CompanyPatchValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(CompanyPatchValidationRequest $request) : JsonResponse {
        $response = $this->companyPatchService->updateCompany($request->validated(),$request->get("uuid"));
        return $this->handleAjaxJsonResponse($response);
    }
}
