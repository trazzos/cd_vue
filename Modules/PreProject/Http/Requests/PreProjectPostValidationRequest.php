<?php

namespace Modules\PreProject\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class PreProjectPostValidationRequest
 * @package Modules\PreProject\Http\Requests
 */
class PreProjectPostValidationRequest extends Request {
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
            'year' => 'integer|required',
            'budget_key' => 'string|required',
            'totals' => 'numeric|required',
            'municipio_id' => 'string|required',
            'municipio_name' => 'string|required',
            'location_id' => 'string|required',
            'location_name' => 'string|required',
        ];
    }
}