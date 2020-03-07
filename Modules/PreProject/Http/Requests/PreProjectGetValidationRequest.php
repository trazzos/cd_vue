<?php

namespace Modules\PreProject\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class PreProjectGetValidationRequest
 * @package Modules\PreProject\Http\Requests
 */
class PreProjectGetValidationRequest extends Request {
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
        return [];
    }
}
