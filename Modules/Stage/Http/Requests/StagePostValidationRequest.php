<?php

namespace Modules\Stage\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class StagePostValidationRequest
 * @package Modules\Stage\Http\Requests
 */
class StagePostValidationRequest extends Request {
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
            'stage_type_id' => 'integer|required',
            'name' => 'string|required',
            'order' => 'integer|required',
        ];
    }
}
