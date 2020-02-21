<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Modules\User\Http\Requests\UserPatchValidationRequest;
use Modules\User\Services\UserUpdateService;

/**
 * Class UserPatchController
 * @package Modules\User\Http\Controllers
 */
class UserPatchController extends Controller {
    private $userPatchController;

    /**
     * UserGetController constructor.
     * @param UserUpdateService $userPatchController
     */
    public function __construct(UserUpdateService $userPatchController) {
        $this->userPatchController = $userPatchController;
    }

    /**
     * @param UserPatchValidationRequest $request
     * @return JsonResponse
     */
    public function __invoke(UserPatchValidationRequest $request) : JsonResponse {
        $data = $request->validated();
        $response = $this->userPatchController->update($data);
        return $this->handleAjaxJsonResponse($response);
    }
}
