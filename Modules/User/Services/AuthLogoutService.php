<?php

namespace Modules\User\Services;

use Illuminate\Routing\Controller;
use JWTAuth;

class AuthLogoutService extends Controller {
    public function logout() {
        JWTAuth::invalidate();
    }
}
