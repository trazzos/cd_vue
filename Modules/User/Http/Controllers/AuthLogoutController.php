<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\Services\AuthLogoutService;

class AuthLogoutController extends Controller {
    private $authLogoutService;

    public function __construct(AuthLogoutService $authLogoutService) {
        $this->authLogoutService = $authLogoutService;
    }

    public function __invoke() {
        $this->authLogoutService->logout();

        return $this->handleAjaxJsonResponse(null);
    }
}
