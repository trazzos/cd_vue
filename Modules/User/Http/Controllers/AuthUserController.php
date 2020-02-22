<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Services\GetUserService;
use Auth;

class AuthUserController extends Controller {
    private $getUserService;

    public function __construct(GetUserService $getUserService) {
        $this->getUserService = $getUserService;
    }

    public function __invoke(Request $request) {
        $response = $this->getUserService->info(Auth::user()->id);

        return $this->handleAjaxJsonResponse($response);
    }
}
