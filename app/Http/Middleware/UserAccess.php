<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
//        $Total=[];
//        $Path=$request->getPathInfo();
//
//        $results=array_filter(explode("/",$Path));
//        foreach ($results as $result) {
//            if (!is_numeric($result)){
//                $Total[]=$result;
//            }
//        }
////        dd(implode('/',$Total));
//        $accesslist =config::get('access');
//        $FormAccessID = $accesslist[$Total[0]][$Total[1]][$Total[2]];
//        if (!GetUserAccess($FormAccessID)){
//            return redirect()->back();
//        }
        return $next($request);
//
    }
}
