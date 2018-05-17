<?php

namespace App\Http\Controllers\General;

use App\Models\OrganizationRoleModel;
use App\Http\Requests\General\OrganizationRoleRequest;
use App\Models\SecurityItemModel;
use App\Models\UserModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class OrganizationRoleController extends Controller
{
    public function index()
    {
        if (GetUserAccess(10010101)) {
            $tablelists = OrganizationRoleModel::all();
            return view('AppViews.General.OrganizationRole.DataList', compact('tablelists'))->with([
                'form_title' => __('forms.OrganizationRole'),
                'route_title' => 'OrganizationRole',
                'table_cols' => [
                    '1' => 'Title',
                ],
                'view_route' => 'AppViews.General.OrganizationRole.'
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }

    }

    public function create()
    {
        if (GetUserAccess(10010102)) {
            return view('AppViews.General.OrganizationRole.DataDetail')->with([
                'form_title' => __('forms.OrganizationRoleCreate'),
                'route_title' => 'OrganizationRole',
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

    public function store(OrganizationRoleRequest $request)
    {
        $DataList = request()->except('_token');
        try {
            $new_data_object = OrganizationRoleModel::create($DataList);
            if ($new_data_object instanceof OrganizationRoleModel) {
                Return redirect()->route('OrganizationRole.index')->with([
                    'alert' => __('messages.Confirm'),
                    'alert_type' => 'success',
                    'alert_button' => __('messages.Ok'),
                ]);
            }
        } catch (QueryException $ex) {
            $string = $ex->getMessage();
            $errors = SqlErrorMessage($string);
            Return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    public function edit($id)
    {
        if (GetUserAccess(10010103)) {
            if ($id && ctype_digit($id)) {
                $DataList = OrganizationRoleModel::find($id);
                if ($DataList instanceof OrganizationRoleModel) {
                    return view('AppViews.General.OrganizationRole.DataDetail', compact('DataList'))->with([
                        'form_title' => __('forms.OrganizationRoleEdit'),
                        'route_title' => 'OrganizationRole',
                    ]);
                }
            }
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

    public function update(OrganizationRoleRequest $request, $id)
    {
        $DataList = request()->except('_token');
        $ListItem = OrganizationRoleModel::find($id);
        try {
            $ListItem->update($DataList);
            Return redirect()->route('OrganizationRole.index')->with([
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

    public function destroy($id)
    {
        if (GetUserAccess(10010104)) {
            try {
                if ($id && ctype_digit($id)) {
                    $DataList = OrganizationRoleModel::find($id);
                    if ($DataList instanceof OrganizationRoleModel) {
                        $DataList->delete();
                        Return redirect()->route('OrganizationRole.index')->with([
                            'alert' => __('messages.Confirm'),
                            'alert_type' => 'success',
                            'alert_button' => __('messages.Ok'),
                        ]);
                    }
                }
            } catch (QueryException $ex) {
                $string = $ex->getMessage();
                $errors = SqlErrorMessage($string);
                Return redirect()->back()->withInput()->withErrors($errors);
            }
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

    public function submits(Request $request)
    {
        $DataList = $request->get('id');
        $Detail = $request->get('Detail');
        try {
            if (!empty($DataList)) {
                switch ($Detail) {
                    case 1: {
                        if (GetUserAccess(10010104)) {
                            OrganizationRoleModel::destroy($DataList);
                            Return redirect()->route('OrganizationRole.index')->with([
                                'alert' => __('messages.Confirm'),
                                'alert_type' => 'success',
                                'alert_button' => __('messages.Ok'),
                            ]);
                            break;
                        } else {
                            return redirect()->back()->with(GetMessageAccess(1));
                            break;
                        }
                    }
                    case 2: {
                        if (GetUserAccess(10010201)) {
                            $tablelists = UserModel::whereIn('OrganizationRoleID', $DataList)->get();
                            return view('AppViews.General.UserAccount.DataList', compact('tablelists'))->with([
                                'form_title' => __('forms.UserAccount'),
                                'route_title' => 'UserAccount',
                                'table_cols' => [
                                ],
                                'view_route' => 'AppViews.General.UserAccount'
                            ]);
                            break;
                        } else {
                            return redirect()->back()->with(GetMessageAccess(1));
                            break;
                        }
                    }
                    default:
                        break;
                }

            } else {
                Return redirect()->route('OrganizationRole.index')->with([
                    'alert' => __('messages.NoSelect'),
                    'alert_type' => 'error',
                    'alert_button' => __('messages.Ok'),
                ]);
            }
        } catch (QueryException $ex) {
            $string = $ex->getMessage();
            $errors = SqlErrorMessage($string);
            Return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    public function access(OrganizationRoleModel $Model, $id)
    {
//        if (GetUserAccess(10010105)){
//            $tablelists=SecurityItemModel::all();
//            $selectparentitem = $Model::find($id)->SecurityItems()->get()->pluck('id')->toarray();
//            return view('AppViews.General.SecurityItem.DataList', compact('tablelists','selectparentitem'))->with([
//                'form_title' => __('messages.UserAccount'),
//                'route_title' => 'OrganizationRole',
//                'table_cols' => [
//                ],
//                'view_route' => 'AppViews.General.SecurityItem'
//            ]);
//        } else {
//            return redirect()->back()->with(GetMessageAccess(1));
//        }
        if (GetUserAccess(10010105)) {
            $categories = SecurityItemModel::where('ParentID', '=', null)->get();
            $allCategories = SecurityItemModel::pluck('Title', 'id')->all();
//            $tablelists=SecurityItemModel::all();
            $selectparentitem = $Model::find($id)->SecurityItems()->get()->pluck('id')->toarray();
            return view('AppViews.General.SecurityItem.DataList', compact('categories', 'allCategories', 'selectparentitem'))->with([
                'form_title' => __('forms.UserAccount'),
                'route_title' => 'OrganizationRole',
                'table_cols' => [
                ],
                'view_route' => 'AppViews.General.SecurityItem'
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

    public function accessupdate(Request $request, OrganizationRoleModel $Model, $id)
    {
        $ParentID = $Model::find($id);
        $DetailID = $request->get('id');
        try {
            $ParentID->SecurityItems()->sync($DetailID);
            return $this->access($Model, $id);
        } catch (QueryException $ex) {
            $string = $ex->getMessage();
            $errors = SqlErrorMessage($string);
            Return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    public function manageCategory()

    {
        $categories = SecurityItemModel::where('ParentID', '=', null)->get();
        $allCategories = SecurityItemModel::pluck('Title', 'id')->all();
        return view('layouts.Treeview.categoryTreeview', compact('categories', 'allCategories'));
    }

    public function addCategory(Request $request)

    {

        $this->validate($request, [

            'title' => 'required',

        ]);

        $input = $request->all();

        $input['ParentID'] = empty($input['ParentID']) ? 0 : $input['ParentID'];


        SecurityItemModel::create($input);

        return back()->with('success', 'New Category added successfully.');

    }
}
