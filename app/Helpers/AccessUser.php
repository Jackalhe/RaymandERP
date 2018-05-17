<?php

function GetUserAccess($id)
{
    // check kardan mostaghim az database
//    $OrganizationRole_id=\Illuminate\Support\Facades\Auth::user()->pluck('OrganizationRoleID')->toarray();
//    $Results= DB::table('Access')
//        ->select('SecurableID')
//        ->where([
//            ['OrganizationRoleID', '=', $OrganizationRole_id],
//            ['SecurableID', '=', $id],
//        ])
//        ->get()->pluck('SecurableID')->toarray();
    // check kardan az session
    if (in_array($id, session('SecurableItem'))) {
        return true;
    } else {
        return false;
    }

}

function GetMessageAccess($id)
{
    if ($id == 1) {
        $result = [
            'alert' => __('messages.AccessDenied'),
            'alert_type' => 'error',
            'alert_button' => __('messages.Ok'),
            'alert_comment' => __('messages.Permission')
        ];
        return $result;
    }

}

function SqlErrorMessage($string){
    $SqlErrors = config('SqlErrors');
    $errors = new \Illuminate\Support\MessageBag();
    foreach ($SqlErrors as $SqlError) {
        if (strpos($string, $SqlError) !== FALSE) {
            $errors->add('SqlErrors', __("SqlErrors.$SqlError"));
        }
    }
    return $errors;
}
