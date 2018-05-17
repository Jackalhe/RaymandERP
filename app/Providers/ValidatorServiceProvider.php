<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        Validator::extend('unique_multiple', function ($attribute, $value, $parameters, $validator) {
//
//
//            $IsEdit = DB::table($parameters[0])->get()->where('id', $parameters[3]);
//            if ($IsEdit === 0) {
//                $count = DB::table($parameters[0])->get()->where($attribute, $value)
//                    ->where($parameters[1], $_REQUEST[$parameters[1]])
//                    ->count();
//
//                if ($count === 0) {
//                    return true;
//                } else {
//                    return false;
//                }
//            } else {
//                return true;
//            }
//
//        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
