<?php

namespace App\Http\Requests\General;

use Illuminate\Foundation\Http\FormRequest;

class FiscalyearRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST': {
                return [
                    'Fiscalyear' =>'required|unique:Fiscalyear',
                    'StartDate' => 'required|date',
                    'EndDate' => 'required|date',
                    'TaxPercent' => 'numeric',
                    'TollPercent'  => 'numeric',
                    'TollPercent2' => 'numeric'
                ];
            }
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'Fiscalyear' =>'required',
                    'StartDate' => 'required|date',
                    'EndDate' => 'required|date',
                    'TaxPercent' => 'numeric',
                    'TollPercent'  => 'numeric',
                    'TollPercent2' => 'numeric'
                ];
            }
            default:break;
        }
    }
}
