<?php

namespace Modules\User\Services;

use Illuminate\Routing\Controller;
use JWTAuth;
use ThrowException;

class AuthLoginService extends Controller {

    public function getToken($credentials) {
        $token = JWTAuth::attempt($credentials);

        if(!$token) {
            ThrowException::forbidden('No pudimos encontrar el usuario');
        }

        return $token;
    }
}
