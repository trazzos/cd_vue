<?php

namespace Modules\User\Services;

use Illuminate\Routing\Controller;
use Modules\User\Models\User;
use ThrowException;

class GetUserService extends Controller {

    //TODO this should use the repository
    public function info($id) {
        $user = User::find($id);

        if(!$user) {
            ThrowException::forbidden('No pudimos encontrar el usuario');
        }

        return $user;
    }
}
