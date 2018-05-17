<?php

namespace App\Http\Requests\General;

use Illuminate\Foundation\Http\FormRequest;

//use Illuminate\Support\Facades\Input;

class OrganizationRoleRequest extends FormRequest
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
//        if (Input::get("Title")){
        switch ($this->method()) {
            case 'POST': {
                return [
                    'Title' => 'required|unique:OrganizationRole',
                ];
            }
            case 'PUT':
            case 'PATCH':
            case 'GET':
            case 'DELETE':
                {
                return [];
        }
            default:break;
        }
    }

}
