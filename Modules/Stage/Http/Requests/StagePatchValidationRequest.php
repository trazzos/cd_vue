<?php

namespace Modules\Stage\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class StagePatchValidationRequest
 * @package Modules\Stage\Http\Requests
 */
class StagePatchValidationRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return[
            'id'=> 'required',
            'name' =>'required|string',
            'award_type_id' => 'required',
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
