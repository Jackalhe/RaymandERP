<?php

namespace App\Http\Controllers\General;


use App\Http\Requests\General\UserAccountRequest;
use App\Models\OrganizationRoleModel;
use App\Models\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class UserAccountController extends Controller
{

    public function index(UserModel $Model)
    {
        if (GetUserAccess(10010201)){
            $tablelists = $Model::all();
            return view('AppViews.General.UserAccount.DataList',compact('tablelists'))->with([
                'form_title' => __('forms.UserAccount'),
                'route_title' => 'UserAccount',
                'table_cols' => [
                ],
                'view_route' => 'AppViews.General.UserAccount'
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

    public function create()
    {
        if (GetUserAccess(10010202)) {
            $OrganizationRoles = OrganizationRoleModel::all()->pluck('Title','id');
            return view('AppViews.General.UserAccount.DataDetail',compact('OrganizationRoles'))->with([
                'form_title' => __('forms.UserAccountCreate'),
                'route_title' => 'UserAccount',
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

    public function store(UserModel $Model,UserAccountRequest $request)
    {
        $DataList = [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'OrganizationRoleID' => $request['OrganizationRoleID'],
            'remember_token' => $request['_token']
        ];
        try{
        $Model::create($DataList);
            Return redirect()->route('UserAccount.index')->with([
                'alert' => __('messages.Confirm'),
                'alert_type' => 'success',
                'alert_button' => __('messages.Ok'),
            ]);
        } catch (QueryException $ex) {
            $string = $ex->getMessage();
            $errors = SqlErrorMessage($string);
            Return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    public function edit(UserModel $Model,$id)
    {
        if (GetUserAccess(10010203)) {
            $DataList = $Model::find($id);
            $OrganizationRoles = OrganizationRoleModel::all()->pluck('Title','id');
            return view('AppViews.General.UserAccount.DataDetail', compact('DataList','OrganizationRoles'))->with([
                'form_title' => __('forms.UserAccountEdit'),
                'route_title' => 'UserAccount'
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

    public function update(UserModel $Model,UserAccountRequest $request, $id)
    {
        if ($request['ChangePass']==1){
            $DataList = [
                'name' => $request['name'],
                'email' => $request['email'],
                'OrganizationRoleID' => $request['OrganizationRoleID'],
                'remember_token' => $request['_token']
            ];
        } else {
            $DataList = [
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'OrganizationRoleID' => $request['OrganizationRoleID'],
                'remember_token' => $request['_token']
            ];
        }
        $ListItem = $Model::find($id);
        try{
        $ListItem->update($DataList);
        Return redirect()->route('UserAccount.index')->with([
            'alert' => __('messages.Confirm'),
            'alert_type' => 'success',
            'alert_button' => __('messages.Ok'),
        ]);
        } catch (QueryException $ex) {
            $string = $ex->getMessage();
            $errors = SqlErrorMessage($string);
            Return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    public function destroy(UserModel $Model,$id)
    {
        if (GetUserAccess(10010204)) {
            $DataList = $Model::find($id);
            try{
            $DataList->delete();
            Return redirect()->route('UserAccount.index')->with([
                'alert' => __('messages.Confirm'),
                'alert_type' => 'success',
                'alert_button' => __('messages.Ok'),
            ]);
            } catch (QueryException $ex) {
                $string = $ex->getMessage();
                $errors = SqlErrorMessage($string);
                Return redirect()->back()->withInput()->withErrors($errors);
            }
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

}
