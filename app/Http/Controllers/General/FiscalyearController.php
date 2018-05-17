<?php

namespace App\Http\Controllers\General;

use App\Http\Requests\General\FiscalyearRequest;
use App\Models\FiscalyearModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FiscalyearController extends Controller
{

    public function index(FiscalyearModel $Model)
    {
        if (GetUserAccess(10020101)){
            $tablelists = $Model::all();
            return view('AppViews.General.Fiscalyear.DataList',compact('tablelists'))->with([
                'form_title' => __('forms.FiscalYear'),
                'route_title' => 'Fiscalyear',
                'table_cols' => [
                    '1' => 'Fiscalyear',
                    '2' => 'StartDate',
                    '3' => 'EndDate',
                    '4' => 'TaxPercent',
                    '5' => 'TollPercent',
                    '6' => 'TollPercent2'
                ],
                'view_route' => 'AppViews.General.Fiscalyear.'
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }


    public function create()
    {
        if (GetUserAccess(10020102)) {
            return view('AppViews.General.Fiscalyear.DataDetail')->with([
                'form_title' => __('forms.FiscalYearCreate'),
                'route_title' => 'Fiscalyear'
            ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }


    public function store(FiscalyearModel $Model,FiscalyearRequest $request)
    {
        $DataList = $request->all();
        try {
            $Model::create($DataList);
            Return redirect()->route('Fiscalyear.index')->with([
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


    public function edit(FiscalyearModel $Model,$id)
    {
        if (GetUserAccess(10020103)) {
                $DataList = $Model::find($id);
                    return view('AppViews.General.Fiscalyear.DataDetail', compact('DataList'))->with([
                        'form_title' => __('forms.FiscalYearEdit'),
                        'route_title' => 'Fiscalyear'
                    ]);
        } else {
            return redirect()->back()->with(GetMessageAccess(1));
        }
    }


    public function update(FiscalyearModel $Model,FiscalyearRequest $request,$id)
    {
        $DataList = $request->all();
        $ListItem = $Model::find($id);
        try{
        $ListItem->update($DataList);
        Return redirect()->route('Fiscalyear.index')->with([
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


    public function destroy(FiscalyearModel $Model,$id)
    {
        if (GetUserAccess(10020104)) {
                $DataList = $Model::find($id);
                try{
                    $DataList->delete();
                    Return redirect()->route('Fiscalyear.index')->with([
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
        $DataList = $request->get('id');
        if (!empty($DataList)){
            try{
            FiscalyearModel::destroy($DataList);
            Return redirect()->route('Fiscalyear.index')->with([
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
            Return redirect()->route('Fiscalyear.index')->with([
                'alert' => __('messages.NoSelect'),
                'alert_type' => 'error',
                'alert_button' => __('messages.Ok'),
            ]);
        }
    }

}
