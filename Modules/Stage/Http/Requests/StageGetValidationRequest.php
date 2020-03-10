<?php

namespace Modules\Stage\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class StageGetValidationRequest
 * @package Modules\Stage\Http\Requests
 */
class StageGetValidationRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
