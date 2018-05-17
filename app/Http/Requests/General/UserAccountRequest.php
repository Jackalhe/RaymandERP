<?php

namespace App\Http\Requests\General;

use App\Models\UserModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserAccountRequest extends FormRequest
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


    public function rules()
    {
        $ChangePass=$this->request->get('changepass');
//        switch ($this->method()){
//            case 'POST':
//            case 'PUT':
//            case 'PATCH':{
        if ($ChangePass==1) {
            return [
                'name' => 'required|string|max:255|unique:users,name,' . $this->UserAccount,
                'email' => 'required|string|email|max:255',
                'OrganizationRoleID' => 'required|Integer'
            ];
        } else {
            return [
                'name' => 'required|string|max:255|unique:users,name,' . $this->UserAccount,
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required|string|min:6',
                'OrganizationRoleID' => 'required|Integer'
            ];

        }
//        }
//            case 'DELETE':
//            case 'GET':{
//                return [];
//        }
//            default:break;
//        }
    }
}
