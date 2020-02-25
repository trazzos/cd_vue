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
            'id' => 'integer|required',
            'ftr' => 'string|required|min:12|max:13',
            'name' => 'string|required',
            'location_id' => 'integer|required',
            'municipio_id' => 'integer|required',
            'state_id' => 'integer|required',
        ];
    }
}
