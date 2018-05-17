<?php

namespace App\Http\Requests\General;

use App\Models\SelectionListModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SelectionListRequest extends FormRequest
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
//        Validator::extend('unique_multiple', function ($attribute, $value, $parameters, $validator) {
//            $count = SelectionListModel::all()->where('Code', $value)
//                ->where($parameters[1], $_REQUEST['CategoryKindID'])
//                ->count();
//            dd($count);
//            return $count === 0;
//        });
        return [
            'CategoryKindID' => 'required',
            'Code' => 'required',
            'Title' => 'required',
//            'Code' => 'required|unique:SelectionList,Code,' . $this->SelectionList,
//            'Code' => 'required|unique_multiple:SelectionList,CategoryKindID,Code,'. $this->SelectionList,
//            'Title' => 'required|unique_multiple:SelectionList,CategoryKindID,Title,'. $this->SelectionList,
//            'Title' => 'required|unique:SelectionList,Title,' . $this->SelectionList,
        ];
    }


}
