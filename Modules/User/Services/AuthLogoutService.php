<?php

namespace Modules\User\Services;

use Illuminate\Routing\Controller;
use Tymon\JWTAuth\JWTAuth;

class AuthLogoutService extends Controller {
    public function logout() {
        JWTAuth::invalidate();
    }
}
