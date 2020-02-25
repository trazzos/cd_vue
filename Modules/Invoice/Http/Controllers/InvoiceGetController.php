<?php

namespace Modules\Invoice\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\Invoice\Http\Requests\InvoiceGetValidationRequest;
use Modules\Invoice\Services\InvoiceGetService;

/**
 * Class InvoiceGetController
 * @package Modules\Invoice\Http\Controllers
 */
class InvoiceGetController extends Controller {
    private $invoiceGetService;

    /**
     * InvoiceGetController constructor.
     * @param InvoiceGetService $invoiceGetService
     */
    public function __construct(InvoiceGetService $invoiceGetService) {
        $this->invoiceGetService = $invoiceGetService;
    }

    /**
     * @param InvoiceGetValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(InvoiceGetValidationRequest $request) : JsonResponse {
        $id = $request->get('id');
        $response = $this->invoiceGetService->list(); //TODO temporary
        return $this->handleAjaxJsonResponse($response);
    }
}
