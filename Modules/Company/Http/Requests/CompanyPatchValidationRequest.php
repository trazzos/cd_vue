<?php

namespace Modules\Company\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class CompanyPatchValidationRequest
 * @package Modules\Company\Http\Requests
 */
class CompanyPatchValidationRequest extends Request {
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
            'uuid' => 'string|required',
            'name' => 'string|required',
            'address' => 'string|required',
            'cp' => 'string|required',
            'state' => 'string|required',
            'phone' => 'string|required',
            'email' => 'string:email|required',
        ];
    }
}
