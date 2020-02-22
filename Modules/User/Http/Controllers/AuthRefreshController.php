<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Modules\User\Services\AuthLoginService;

class AuthRefreshController extends Controller {
    private $authLoginService;

    public function __construct(AuthLoginService $authLoginService) {
        $this->authLoginService = $authLoginService;
    }

    public function __invoke(Request $request) {
        return $this->handleAjaxJsonResponse(null);
    }
}
