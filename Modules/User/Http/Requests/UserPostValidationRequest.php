<?php

namespace Modules\User\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class UserPostValidationRequest
 * @package Modules\User\Http\Requests
 */
class UserPostValidationRequest extends Request {
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'string|required',
            'email' => 'string|required',
            'password' => 'string|required',
        ];
    }
}
