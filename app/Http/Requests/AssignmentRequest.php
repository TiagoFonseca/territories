<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AssignmentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'map_id' => 'required',
            'user_id' => 'required',
            'assigned_on' => 'required|date'
        ];
    }
}
