<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Modules\User\Services\AuthLoginService;

class AuthLoginController extends Controller {
    private $authLoginService;

    public function __construct(AuthLoginService $authLoginService) {
        $this->authLoginService = $authLoginService;
    }

    public function __invoke(Request $request) {
        $credentials = $request->only('email', 'password');
        $response = $this->authLoginService->getToken($credentials);

        return response('', Response::HTTP_OK, ['Authorization' => "Bearer ".$response]);
    }
}
