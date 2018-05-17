<?php

namespace App\Http\Controllers\General;

use App\Http\Requests\General\SelectionListRequest;
use App\Models\SelectionListModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class SelectionListController extends Controller
{

    public function index(SelectionListModel $Model)
    {
        if (GetUserAccess(10020201)) {
//            $tablelists = $Model::all();
            $tablelists = $Model::OrderList()->get();
            return view('AppViews.General.SelectionList.DataList', compact('tablelists'))->with([
                'form_title' => __('forms.SelectionList'),
                'route_title' => 'SelectionList',
                'table_cols' => [
                ],
                'view_route' => 'AppViews.General.SelectionList'
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

    public function create()
    {
        if (GetUserAccess(10020202)) {
            $selectionlists = Config::get('selection');
            foreach ($selectionlists as $key => $value) {
                $selectionlist[$key] = __("selections.$value");
            }
            return view('AppViews.General.SelectionList.DataDetail', compact('selectionlist'))->with([
                'form_title' => __('forms.SelectionList'),
                'route_title' => 'SelectionList',
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

    public function store(SelectionListModel $Model, SelectionListRequest $request)
    {

        $DataList = [
            'CategoryKindID' => $request['CategoryKindID'],
            'Code' => $request['Code'],
            'Title' => $request['Title'],
            'Comment' => $request['Comment'],
            'CreatorID' => Auth::id()
        ];
        try {
            $Model::create($DataList);
            Return redirect()->route('SelectionList.index')->with([
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

    public function edit(SelectionListModel $Model, $id)
    {
        if (GetUserAccess(10020203)) {
            $selectionlists = Config::get('selection');
            foreach ($selectionlists as $key => $value) {
                $selectionlist[$key] = __("selections.$value");
            }
            $DataList = $Model::find($id);
            return view('AppViews.General.SelectionList.DataDetail', compact('DataList', 'selectionlist'))->with([
                'form_title' => __('forms.SelectionListEdit'),
                'route_title' => 'SelectionList'
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

    public function update(SelectionListModel $Model, SelectionListRequest $request, $id)
    {
        $DataList = [
            'CategoryKindID' => $request['CategoryKindID'],
            'Code' => $request['Code'],
            'Title' => $request['Title'],
            'Comment' => $request['Comment'],
            'EditorID' => Auth::id()
        ];
        $ListItem = $Model::find($id);
        try {
            $ListItem->update($DataList);
            Return redirect()->route('SelectionList.index')->with([
                'alert' => __('messages.Confirm'),
                'alert_type' => 'success',
                'alert_button' => __('messages.Ok'),
            ]);
        } catch (QueryException $ex) {
            $string = $ex->getMessage();
            $errors = SqlErrorMessage($string);
//            $SqlErrors = config('SqlErrors');
//            $errors = new MessageBag();
//            foreach ($SqlErrors as $SqlError) {
//                if (strpos($string, $SqlError) !== FALSE) {
//                    $errors->add('SqlErrors', __("SqlErrors.$SqlError"));
//                }
//            }
//        dd($ex->errorInfo[1] );
            Return redirect()->back()->withInput()->withErrors($errors);
//            dd($ex);

        }

    }

    public function destroy(SelectionListModel $Model, $id)
    {
        if (GetUserAccess(10020204)) {
            $DataList = $Model::find($id);
            try{
            $DataList->delete();
            Return redirect()->route('SelectionList.index')->with([
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

    public function destroy_all(Request $request)
    {
        if (GetUserAccess(10020204)) {
            $DataList = $request->get('id');
            if (!empty($DataList)) {
                try{
                SelectionListModel::destroy($DataList);
                Return redirect()->route('SelectionList.index')->with([
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
                Return redirect()->route('SelectionList.index')->with([
                    'alert' => __('messages.NoSelect'),
                    'alert_type' => 'error',
                    'alert_button' => __('messages.Ok'),
                ]);
            }
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }

}
